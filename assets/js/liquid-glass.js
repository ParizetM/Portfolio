/**
 * Liquid Glass — résumé d'utilisation et API
 *
 * Module qui applique un effet "verre liquide" via un SVG filter + canvas de displacement.
 * L'initialisation est automatique au chargement du DOM. Pour chaque élément ayant la classe
 * CSS "liquid-glass", un shader est créé qui génère une displacement map (canvas caché)
 * et l'applique au moyen d'un <filter> SVG (feImage + feDisplacementMap). Le module expose
 * aussi un gestionnaire global pour contrôle manuel.
 *
 * Principales caractéristiques
 * - Activation automatique : le gestionnaire s'initialise au DOMContentLoaded et applique
 *   l'effet à tous les éléments .liquid-glass existants.
 * - Observation du DOM : un MutationObserver applique/retire automatiquement l'effet
 *   quand des éléments sont ajoutés/supprimés ou quand la classe change.
 * - Interaction souris : si la fonction de fragment lit la position de la souris, l'effet
 *   devient interactif (détection via un proxy).
 * - Redimensionnement : le shader redimensionne sa canvas lors du resize de la fenêtre.
 * - Fallback : si le navigateur ne supporte pas l'approche (test de backdrop-filter / CSS.supports
 *   et exclusion de Firefox / Mobile / iOS), la classe "liquid-glass-fallback" est ajoutée
 *   et un style de substitution est appliqué.
 *
 * Comment appliquer l'effet (récap)
 * 1. Ajouter la classe CSS "liquid-glass" à l'élément HTML voulu :
 *    <div class="liquid-glass">...</div>
 * 2. Le script s'initialise automatiquement et applique l'effet si le navigateur est supporté.
 * 3. Si vous souhaitez un contrôle manuel, utiliser l'API exposée globalement (voir ci‑dessous).
 * 4. Pour retirer l'effet d'un élément : supprimer la classe "liquid-glass" ou appeler la méthode
 *    de suppression côté gestionnaire (window.liquidGlassManager.removeEffect(el)).
 * 5. Pour arrêter complètement le gestionnaire et détruire tous les shaders :
 *    window.liquidGlassManager.destroy()
 *
 * API publique exposée
 * - window.liquidGlassManager : instance du gestionnaire (LiquidGlassManager) — méthodes utiles :
 *     - applyEffect(element)      : applique l'effet à un élément DOM (si non déjà appliqué)
 *     - removeEffect(element)     : retire l'effet d'un élément
 *     - destroy()                 : détruit tous les shaders et arrête l'observation
 * - window.LiquidGlassShader : classe shader (pour usages avancés / instanciations personnalisées)
 *
 * Options et personnalisation
 * - Personnaliser la déformation : fournir une fonction "fragment" lors de la création d'un
 *   LiquidGlassShader (ou via applyEffect si vous créez manuellement une instance). Signature :
 *     fragment(uv, mouse) -> { x: number, y: number }
 *   où uv = { x: 0..1, y: 0..1 } (coordonnées normalisées) et mouse = { x, y } (coordonnées
 *   normalisées) si la fonction y accède.
 * - La fonction doit retourner les coordonnées de texture de destination (coordonnées remappées).
 * - Le shader interne fournit une utilité texture(x,y) qui construit l'objet attendu.
 *
 * Contraintes et compatibilité
 * - Le module vérifie la présence de 'backdrop-filter' et CSS.supports("backdrop-filter", "blur(1px)").
 * - Par défaut, Firefox, appareils mobiles et iOS sont exclus (fallback appliqué).
 * - L'effet utilise un canvas en mémoire et une image encodée en dataURL pour feImage ; cela
 *   a un coût en CPU/mémoire pour de grandes zones ou de nombreux éléments.
 *
 * Bonnes pratiques
 * - Limiter le nombre d'éléments .liquid-glass simultanés pour préserver les performances.
 * - Privilégier des dimensions modérées ou désactiver l'interaction si non nécessaire.
 * - Tester sur les navigateurs cibles ; s'appuyer sur la classe "liquid-glass-fallback" pour
 *   fournir un rendu alternatif cohérent.
 *
 * Exemple d'usage rapide
 * - Automatique : ajoutez la classe CSS à un élément et laissez le script s'occuper du reste.
 * - Manuel (contrôle avancé) :
 *     const el = document.querySelector('#maCarte');
 *     window.liquidGlassManager.applyEffect(el);
 *     // Plus tard...
 *     window.liquidGlassManager.removeEffect(el);
 *
 * Note : Ce commentaire résume l'usage et l'API du fichier liquid-glass.js — se référer au
 * code source pour les détails d'implémentation et pour créer des fragments de déformation
 * personnalisés.
 */
// ===============================
// Composant Liquid Glass en JavaScript Vanilla
// Applique un effet de verre liquide aux éléments ayant la classe 'liquid-glass'.
// Inspiré du travail de Shu Ding (https://github.com/shuding/liquid-glass) en 2025.
// ===============================



// Détection du support backdrop-filter + SVG filter + détection Firefox/mobile
function isLiquidGlassSupported() {
  const ua = navigator.userAgent;
  // Détection Firefox
  // Détection Firefox ou Safari

  // Test backdrop-filter + url support
  return (
    "backdropFilter" in document.body.style &&
    (window.CSS && CSS.supports("backdrop-filter", "blur(1px)")) &&
    !/Firefox/i.test(ua) &&
    !/Mobile/i.test(ua) &&
    !/iPad|iPhone|iPod/.test(ua)
  );
  // Note: iPad/iPhone/iPod sont exclus car ils n'ont pas de support

}

(function () {
  "use strict";

  // Si un gestionnaire LiquidGlass existe déjà, le détruire pour éviter les doublons
  // Check if liquid glass manager already exists and destroy it
  if (window.liquidGlassManager) {
    window.liquidGlassManager.destroy();
    // console.log("Previous liquid glass effects removed.");
  }

  // Utility functions

  // Fonction d'interpolation douce pour les transitions
  function smoothStep(a, b, t) {
    t = Math.max(0, Math.min(1, (t - a) / (b - a)));
    return t * t * (3 - 2 * t);
  }

  // Calcule la longueur d'un vecteur (x, y)
  function length(x, y) {
    return Math.sqrt(x * x + y * y);
  }

  // Signed Distance Function pour un rectangle arrondi (utilisé pour l'effet de bord)
  function roundedRectSDF(x, y, width, height, radius) {
    const qx = Math.abs(x) - width + radius;
    const qy = Math.abs(y) - height + radius;
    return (
      Math.min(Math.max(qx, qy), 0) +
      length(Math.max(qx, 0), Math.max(qy, 0)) -
      radius
    );
  }

  // Représente une coordonnée de texture
  function texture(x, y) {
    return { type: "t", x, y };
  }

  // Génère un identifiant unique pour chaque instance
  function generateId() {
    return "liquid-glass-" + Math.random().toString(36).substr(2, 9);
  }

  // ===============================
  // Classe principale du shader Liquid Glass
  // ===============================
  class LiquidGlassShader {
    /**
     * @param {HTMLElement} element - Élément cible
     * @param {Object} options - Options du shader
     */
    constructor(element, options = {}) {
      this.element = element;
      this.width = options.width || element.offsetWidth || 300;
      this.height = options.height || element.offsetHeight || 200;
      // Fonction de fragment pour calculer la déformation
      this.fragment = options.fragment || ((uv) => texture(uv.x, uv.y));
      this.canvasDPI = 1;
      this.id = generateId();

      this.mouse = { x: 0, y: 0 }; // Position de la souris normalisée
      this.mouseUsed = false;

      this.setupShader();
      this.setupEventListeners();
      this.updateShader();
    }

    // Prépare le SVG filter, le canvas et applique les styles à l'élément
    setupShader() {
      // Si le support n'est pas là, fallback visuel
      if (!isLiquidGlassSupported()) {
        this.element.style.background = "rgba(36,36,36,0.5)";
        this.element.style.backdropFilter = "";
        this.element.style.boxShadow = "";
        this.element.style.overflow = "";
        this.element.classList.add("liquid-glass-fallback");
        return;
      }
      // Récupère le style courant de l'élément
      const computedStyle = window.getComputedStyle(this.element);
      const currentPosition = computedStyle.position;

      // S'assure que l'élément est positionné (pour le filter)
      if (currentPosition === "static") {
        this.element.style.position = "relative";
      }

      // Applique les styles d'effet verre liquide
      this.element.style.overflow = "hidden";
      this.element.style.backdropFilter = `url(#${this.id}_filter) blur(0.25px) brightness(1.2) saturate(1.1)`;

      // Ajoute un effet de verre si aucun box-shadow n'est défini
      if (!this.element.style.boxShadow) {
        this.element.style.boxShadow = `
          0 4px 8px rgba(0, 0, 0, 0.25),
          0 -10px 25px inset rgba(0, 0, 0, 0.15),
          0 -1px 4px 1px inset rgba(255, 254, 74, 0.2)
        `;
      }

      // Crée le SVG filter pour l'effet de déplacement
      this.svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
      this.svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
      this.svg.setAttribute("width", "0");
      this.svg.setAttribute("height", "0");
      this.svg.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        pointer-events: none;
        z-index: 9998;
      `;

      const defs = document.createElementNS(
        "http://www.w3.org/2000/svg",
        "defs"
      );
      const filter = document.createElementNS(
        "http://www.w3.org/2000/svg",
        "filter"
      );
      filter.setAttribute("id", `${this.id}_filter`);
      filter.setAttribute("filterUnits", "userSpaceOnUse");
      filter.setAttribute("colorInterpolationFilters", "sRGB");
      filter.setAttribute("x", "0");
      filter.setAttribute("y", "0");
      filter.setAttribute("width", this.width.toString());
      filter.setAttribute("height", this.height.toString());

      // feImage : image de déplacement générée par le canvas
      this.feImage = document.createElementNS(
        "http://www.w3.org/2000/svg",
        "feImage"
      );
      this.feImage.setAttribute("id", `${this.id}_map`);
      this.feImage.setAttribute("width", this.width.toString());
      this.feImage.setAttribute("height", this.height.toString());

      // feDisplacementMap : applique la déformation à l'image source
      this.feDisplacementMap = document.createElementNS(
        "http://www.w3.org/2000/svg",
        "feDisplacementMap"
      );
      this.feDisplacementMap.setAttribute("in", "SourceGraphic");
      this.feDisplacementMap.setAttribute("in2", `${this.id}_map`);
      this.feDisplacementMap.setAttribute("xChannelSelector", "R");
      this.feDisplacementMap.setAttribute("yChannelSelector", "G");

      filter.appendChild(this.feImage);
      filter.appendChild(this.feDisplacementMap);
      defs.appendChild(filter);
      this.svg.appendChild(defs);

      // Ajoute le SVG au document si pas déjà présent
      if (!document.querySelector(`#${this.id}_svg`)) {
        this.svg.id = `${this.id}_svg`;
        document.head.appendChild(this.svg);
      }

      // Crée le canvas caché pour générer la displacement map
      this.canvas = document.createElement("canvas");
      this.canvas.width = this.width * this.canvasDPI;
      this.canvas.height = this.height * this.canvasDPI;
      this.canvas.style.display = "none";

      this.context = this.canvas.getContext("2d");
    }

    // Ajoute les écouteurs d'événements (souris, resize)
    setupEventListeners() {
      // Met à jour la position de la souris pour l'effet interactif
      this.element.addEventListener("mousemove", (e) => {
        const rect = this.element.getBoundingClientRect();
        this.mouse.x = (e.clientX - rect.left) / rect.width;
        this.mouse.y = (e.clientY - rect.top) / rect.height;

        if (this.mouseUsed) {
          this.updateShader();
        }
      });

      // Met à jour la taille du canvas et du filter lors du redimensionnement de la fenêtre
      window.addEventListener("resize", () => {
        this.width = this.element.offsetWidth;
        this.height = this.element.offsetHeight;
        this.canvas.width = this.width * this.canvasDPI;
        this.canvas.height = this.height * this.canvasDPI;
        this.updateShader();
      });
    }

    // Met à jour la displacement map et le filter SVG
    updateShader() {
      // Proxy pour détecter l'utilisation de la souris dans le fragment
      const mouseProxy = new Proxy(this.mouse, {
        get: (target, prop) => {
          this.mouseUsed = true;
          return target[prop];
        },
      });

      this.mouseUsed = false;

      const w = this.width * this.canvasDPI;
      const h = this.height * this.canvasDPI;
      const data = new Uint8ClampedArray(w * h * 4);

      let maxScale = 0;
      const rawValues = [];

      // Calcule la déformation pour chaque pixel
      for (let i = 0; i < data.length; i += 4) {
        const x = (i / 4) % w;
        const y = Math.floor(i / 4 / w);
        const pos = this.fragment({ x: x / w, y: y / h }, mouseProxy);
        const dx = pos.x * w - x;
        const dy = pos.y * h - y;
        maxScale = Math.max(maxScale, Math.abs(dx), Math.abs(dy));
        rawValues.push(dx, dy);
      }

      maxScale *= 0.5;

      // Remplit le tableau de pixels RGBA pour la displacement map
      let index = 0;
      for (let i = 0; i < data.length; i += 4) {
        const r = rawValues[index++] / maxScale + 0.5;
        const g = rawValues[index++] / maxScale + 0.5;
        data[i] = r * 255;
        data[i + 1] = g * 255;
        data[i + 2] = 0;
        data[i + 3] = 255;
      }

      // Applique l'image générée au filter SVG
      this.context.putImageData(new ImageData(data, w, h), 0, 0);
      this.feImage.setAttributeNS(
        "http://www.w3.org/1999/xlink",
        "href",
        this.canvas.toDataURL()
      );
      this.feDisplacementMap.setAttribute(
        "scale",
        (maxScale / this.canvasDPI).toString()
      );
    }

    // Nettoie l'effet et supprime les éléments SVG/canvas
    destroy() {
      // Supprime le backdrop filter
      this.element.style.backdropFilter = "";

      // Supprime le SVG
      if (this.svg && this.svg.parentNode) {
        this.svg.remove();
      }

      // Supprime le canvas
      if (this.canvas && this.canvas.parentNode) {
        this.canvas.remove();
      }
    }
  }

  // Liquid Glass Manager

  // ===============================
  // Gestionnaire global Liquid Glass
  // Applique l'effet à tous les éléments .liquid-glass et surveille le DOM
  // ===============================
  class LiquidGlassManager {
    constructor() {
      this.shaders = new Map(); // Map élément => instance shader
      this.observer = null;
      this.init();
    }

    // Initialise le manager : applique l'effet et observe le DOM
    init() {
      this.applyToExistingElements();
      this.setupMutationObserver();
    }

    // Applique l'effet à tous les éléments déjà présents
    applyToExistingElements() {
      const elements = document.querySelectorAll(".liquid-glass");
      elements.forEach((element) => this.applyEffect(element));
    }

    // Observe le DOM pour appliquer/retirer l'effet sur les nouveaux éléments
    setupMutationObserver() {
      this.observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
          if (mutation.type === "childList") {
            mutation.addedNodes.forEach((node) => {
              if (node.nodeType === Node.ELEMENT_NODE) {
                // Si le noeud ajouté a la classe, applique l'effet
                if (node.classList && node.classList.contains("liquid-glass")) {
                  this.applyEffect(node);
                }
                // Applique aussi à tous les enfants .liquid-glass
                const childElements =
                  node.querySelectorAll &&
                  node.querySelectorAll(".liquid-glass");
                if (childElements) {
                  childElements.forEach((element) => this.applyEffect(element));
                }
              }
            });
          }
          // Si la classe change, applique ou retire l'effet
          if (
            mutation.type === "attributes" &&
            mutation.attributeName === "class"
          ) {
            const target = mutation.target;
            if (
              target.classList.contains("liquid-glass") &&
              !this.shaders.has(target)
            ) {
              this.applyEffect(target);
            } else if (
              !target.classList.contains("liquid-glass") &&
              this.shaders.has(target)
            ) {
              this.removeEffect(target);
            }
          }
        });
      });

      this.observer.observe(document.body, {
        childList: true,
        subtree: true,
        attributes: true,
        attributeFilter: ["class"],
      });
    }

    // Applique l'effet à un élément donné
    applyEffect(element) {
      if (this.shaders.has(element)) {
        return; // Déjà appliqué
      }

      // Crée une instance du shader avec la fonction de déformation
      const shader = new LiquidGlassShader(element, {
        fragment: (uv, mouse) => {
          const ix = uv.x - 0.5;
          const iy = uv.y - 0.5;
          const distanceToEdge = roundedRectSDF(ix, iy, 0.3, 0.2, 0.6);
          const displacement = smoothStep(0.8, 0, distanceToEdge - 0.15);
          const scaled = smoothStep(0, 1, displacement);
          return texture(ix * scaled + 0.5, iy * scaled + 0.5);
        },
      });

      this.shaders.set(element, shader);
    }

    // Retire l'effet d'un élément
    removeEffect(element) {
      const shader = this.shaders.get(element);
      if (shader) {
        shader.destroy();
        this.shaders.delete(element);
      }
    }

    // Détruit tous les shaders et arrête l'observation du DOM
    destroy() {
      this.shaders.forEach((shader, element) => {
        shader.destroy();
      });
      this.shaders.clear();
      if (this.observer) {
        this.observer.disconnect();
      }
    }
  }

  // Initialize the Liquid Glass Manager
  // Initialise le gestionnaire Liquid Glass et expose les classes globalement
  function initLiquidGlass() {
    if (!isLiquidGlassSupported()) {
      // Applique le fallback à tous les .liquid-glass existants
      document.querySelectorAll(".liquid-glass").forEach((el) => {

        el.classList.add("liquid-glass-fallback");
      });
      console.warn(
        "Liquid Glass non supporté sur ce navigateur. Fallback appliqué."
      );
      return;
    }
    const manager = new LiquidGlassManager();
    // console.log(
    //   "Composant Liquid Glass initialisé ! Ajoutez la classe \"liquid-glass\" à n'importe quel div pour appliquer l'effet."
    // );
    window.liquidGlassManager = manager; // Pour contrôle externe
    window.LiquidGlassShader = LiquidGlassShader; // Pour usage avancé
  }

  // Lance l'initialisation quand le DOM est prêt
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initLiquidGlass);
  } else {
    initLiquidGlass();
  }
})();
