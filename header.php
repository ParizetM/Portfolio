

<!-- Navigation flottante gauche avec effet liquid glass -->
<div class="floating-nav nav-left liquid-glass rounded-full">
    <div class="nav-content">
        <button onclick="window.history.back()" class="hidden-mobile liquid-btn">
            <img src="assets/icons/arrow_back.svg" alt="Retour" class="w-5 h-5 " />
        </button>
        <a href="index.php" class=" liquid-btn flex items-center gap-2">
            <img src="assets/icons/Avatar-rounded.svg" alt="Avatar" class="w-8 h-8" />
            <span class="font-bold text-lg">Martin Parizet</span>
        </a>
    </div>
</div>

<!-- Navigation flottante droite avec effet liquid glass -->
<div class="floating-nav nav-right liquid-glass rounded-full">
    <div class="nav-content">
        <a href="index.php" class="glass-btn hidden-mobile liquid-btn">Accueil</a>
        <a href="index.php?page=projets" class="glass-btn liquid-btn">Projets</a>
        <a href="index.php#contact" class="glass-btn liquid-btn">Contact</a>
        <a href="cv.php" class="glass-btn liquid-btn">CV</a>
    </div>
</div>

<!-- Script pour l'effet de suivi de souris plus fluide -->
<script>
const navStates = new WeakMap();

// Fonction pour appliquer l'effet liquid glass aux boutons au hover
function setupButtonLiquidGlass() {
    const buttons = document.querySelectorAll('.liquid-btn');
    
    buttons.forEach(button => {
        const add = () => button.classList.add('liquid-glass');
        const remove = () => {
            button.classList.remove('liquid-glass');
            if (window.liquidGlassManager?.removeEffect) window.liquidGlassManager.removeEffect(button);
            button.style.cssText = '';
        };
        button.addEventListener('mouseenter', add);
        button.addEventListener('mouseleave', remove);
        button.addEventListener('touchstart', add, {passive: true});
        ['touchend', 'touchcancel'].forEach(e => button.addEventListener(e, remove, {passive: true}));
    });
}

// Fonction pour appliquer les événements followMouse à tous les éléments liquid-glass
function setupLiquidGlassEvents() {
    const liquidElements = document.querySelectorAll('.liquid-glass');
    
    liquidElements.forEach(element => {
        // Éviter de dupliquer les événements
        if (element.hasAttribute('data-liquid-events')) return;
        element.setAttribute('data-liquid-events', 'true');
        
        element.addEventListener('mousemove', function(event) {
            followMouse(this, event);
        });
        
        element.addEventListener('mouseleave', function() {
            resetPosition(this);
        });
    });
}

// Initialiser les effets après le chargement du DOM
document.addEventListener('DOMContentLoaded', function() {
    setupButtonLiquidGlass();
    setupLiquidGlassEvents();
    
    // Observer les changements dans le DOM pour les nouveaux éléments liquid-glass
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                const target = mutation.target;
                if (target.classList.contains('liquid-glass') && !target.hasAttribute('data-liquid-events')) {
                    setupLiquidGlassEvents();
                }
            }
            
            if (mutation.type === 'childList') {
                mutation.addedNodes.forEach(function(node) {
                    if (node.nodeType === Node.ELEMENT_NODE) {
                        if (node.classList && node.classList.contains('liquid-glass')) {
                            setupLiquidGlassEvents();
                        }
                        
                        const childElements = node.querySelectorAll && node.querySelectorAll('.liquid-glass');
                        if (childElements && childElements.length > 0) {
                            setupLiquidGlassEvents();
                        }
                    }
                });
            }
        });
    });
    
    observer.observe(document.body, {
        childList: true,
        subtree: true,
        attributes: true,
        attributeFilter: ['class']
    });
});

/**
 * Gère l'animation de suivi de la souris pour un élément donné.
 *
 * Utilise une interpolation linéaire (lerp) pour déplacer en douceur l'élément
 * vers la position de la souris, avec un effet de retour à la position initiale
 * lorsque la souris quitte l'élément.
 *
 * Fonctions :
 * - followMouse(element, event) : Met à jour la cible de déplacement de l'élément selon la position de la souris.
 * - resetPosition(element) : Ramène l'élément à sa position d'origine.
 * - animateNav(element, state) : Anime le déplacement de l'élément vers la cible définie.
 *
 * @param {HTMLElement} element L'élément à animer.
 * @param {MouseEvent} event L'événement souris utilisé pour déterminer la position cible.
 *
 * Variables :
 * - navStates : Map stockant l'état d'animation de chaque élément (position actuelle, cible, etc.).
 */
function followMouse(element, event) {
    if (!navStates.has(element)) {
        navStates.set(element, { targetX: 0, targetY: 0, currentX: 0, currentY: 0, animating: false });
    }
    const state = navStates.get(element);
    const rect = element.getBoundingClientRect();
    const centerX = rect.left + rect.width / 2;
    const centerY = rect.top + rect.height / 2;
    
    // Position de la souris pour l'animation de déplacement
    state.targetX = (event.clientX - centerX) * 0.15;
    state.targetY = (event.clientY - centerY) * 0.15;
    
    // Position de la souris pour l'effet de fondu (en pourcentage)
    const mouseX = ((event.clientX - rect.left) / rect.width) * 100;
    const mouseY = ((event.clientY - rect.top) / rect.height) * 100;
    
    // // Mettre à jour les variables CSS pour le gradient
    // element.style.setProperty('--mouse-x', mouseX + '%');
    // element.style.setProperty('--mouse-y', mouseY + '%');
    
    if (!state.animating) {
        state.animating = true;
        animateNav(element, state);
    }
}

function resetPosition(element) {
    if (!navStates.has(element)) return;
    const state = navStates.get(element);
    state.targetX = 0;
    state.targetY = 0;
    if (!state.animating) {
        state.animating = true;
        animateNav(element, state);
    }
}

function animateNav(element, state) {
    // Lerp vers la cible
    // Calcul du facteur d'interpolation en fonction de la taille de l'élément
    const minSize = 40; // taille minimale pour éviter division par zéro
    const maxStrength = 0.25; // force max pour petits éléments
    const minStrength = 0.07; // force min pour grands éléments

    const rect = element.getBoundingClientRect();
    const width = Math.max(rect.width, minSize);
    const height = Math.max(rect.height, minSize);

    // Plus l'élément est petit, plus le facteur est élevé
    const lerpX = minStrength + (maxStrength - minStrength) * (0.7 - Math.min(width / 200, 1));
    const lerpY = minStrength + (maxStrength - minStrength) * (1 - Math.min(height / 200, 1));

    state.currentX += (state.targetX - state.currentX) * lerpX;
    state.currentY += (state.targetY - state.currentY) * lerpY;
    element.style.transform = `translate(${state.currentX}px, ${state.currentY}px)`;
    if (Math.abs(state.currentX - state.targetX) > 0.5 || Math.abs(state.currentY - state.targetY) > 0.5) {
        requestAnimationFrame(() => animateNav(element, state));
    } else {
        state.currentX = state.targetX;
        state.currentY = state.targetY;
        element.style.transform = `translate(${state.currentX}px, ${state.currentY}px)`;
        state.animating = false;
    }
}
</script>

<!-- Script Liquid Glass Component -->
<script src="assets/js/liquid-glass.js"></script>
