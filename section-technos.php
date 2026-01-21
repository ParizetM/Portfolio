<?php
// Section Technologies & Outils extraite de home.php
?>
<section id="competences" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">
  <h1 class="text-center mb-8 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
    Ma Toolbox
  </h1>

  <div class="max-w-4xl mx-auto w-full pb-12">
    <!-- Conteneur des bulles technologiques flottantes -->
    <div class="skill-container relative h-[600px] w-full rounded-xl p-4 pr-8 mb-20 overflow-visible border-2 border-dashed border-gray-400/30">
      <?php
      // Inclusion des fonctions pour les technologies
      include_once 'includes/tech-functions.php';

      // Configuration des répertoires d'icônes
      $clickableDir = __DIR__ . '/assets/icons/technos';
      $nonClickableDir1 = __DIR__ . '/assets/icons/techno-autre/language';
      $nonClickableDir2 = __DIR__ . '/assets/icons/techno-autre/outil';

      // Récupération des fichiers d'icônes
      $clickableFiles = getTechFiles($clickableDir);
      $nonClickableFiles1 = getTechFiles($nonClickableDir1);
      $nonClickableFiles2 = getTechFiles($nonClickableDir2);
      $nonClickableFiles = array_merge($nonClickableFiles1, $nonClickableFiles2);

      // Configuration des paramètres d'affichage
      $config = getTechConfig();
      $positions = [];

      // Génération des bulles non-cliquables
      foreach ($nonClickableFiles as $file) {
        $fileName = pathinfo($file, PATHINFO_FILENAME);
        $size = $config['sizes'][array_rand($config['sizes'])];
        $radius = $size / 2;
        $delay = $config['delays'][array_rand($config['delays'])];
        $attempts = 0;

        do {
          $x = rand(5, 85);
          $y = rand(5, 75);
          $overlap = checkOverlap($x, $y, $radius, $positions);
          $attempts++;
        } while ($overlap && $attempts < $config['maxAttempts']);

        // Placer la bulle même en cas de chevauchement après maxAttempts
        $positions[] = ['x' => $x, 'y' => $y, 'radius' => $radius];
        $iconPath = in_array($file, $nonClickableFiles1) ? 'assets/icons/techno-autre/language/' : 'assets/icons/techno-autre/outil/';
        generateTechBubble($file, $fileName, $size, $x, $y, $delay, false, $iconPath);
      }

      // Génération des bulles cliquables
      foreach ($clickableFiles as $file) {
        $fileName = pathinfo($file, PATHINFO_FILENAME);
        $size = $config['sizes'][array_rand($config['sizes'])];
        $radius = $size / 2;
        $delay = $config['delays'][array_rand($config['delays'])];
        $attempts = 0;

        do {
          $x = rand(5, 80);
          $y = rand(5, 75);
          $overlap = checkOverlap($x, $y, $radius, $positions);
          $attempts++;
        } while ($overlap && $attempts < $config['maxAttempts']);

        // Placer la bulle même en cas de chevauchement après maxAttempts
        $positions[] = ['x' => $x, 'y' => $y, 'radius' => $radius];
        generateTechBubble($file, $fileName, $size, $x, $y, $delay, true);
      }
      ?>
    </div>
  </div>

  <!-- Styles CSS pour les bulles interactives -->
  <style>
    /* Wrapper qui contient la bulle et le tooltip */
    .skill-bubble-wrapper {
      position: absolute;
      width: var(--size);
      height: var(--size);
      top: var(--y);
      left: var(--x);
      pointer-events: none;
    }

    .skill-bubble-wrapper .skill-bubble {
      position: relative;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      pointer-events: auto;
    }

    /* Tooltip au hover - maintenant en dehors de la bulle */
    .tech-tooltip {
      position: absolute;
      bottom: -35px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(234, 88, 12, 0.95);
      color: white;
      padding: 4px 12px;
      border-radius: 6px;
      font-size: 0.875rem;
      white-space: nowrap;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
      z-index: 1000;
    }

    .tech-tooltip::before {
      content: '';
      position: absolute;
      top: -4px;
      left: 50%;
      transform: translateX(-50%);
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-bottom: 5px solid rgba(234, 88, 12, 0.95);
    }

    .skill-bubble-wrapper:hover .tech-tooltip {
      opacity: 1;
    }

    /* Agrandissement des icônes */
    .skill-bubble .skill-icon {
      width: 60%;
      height: 60%;
      object-fit: contain;
    }

    /* Cursor draggable */
    .draggable-bubble {
      cursor: grab;
      user-select: none;
      will-change: transform;
    }

    .draggable-bubble:active {
      cursor: grabbing;
    }

    /* Désactiver l'animation float quand la souris interagit */
    .draggable-bubble.mouse-active {
      animation: none !important;
    }

    /* Affichage mobile - garder les textes visibles */
    @media (max-width: 768px) {
      .tech-label {
        display: block !important;
        font-size: 0.7rem;
        margin-top: 4px;
      }

      .tech-tooltip {
        display: none;
      }

      .skill-bubble .skill-icon {
        width: 40%;
        height: 40%;
      }
    }
  </style>

  <!-- Script pour drag & drop et suivi souris -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const wrappers = document.querySelectorAll('.skill-bubble-wrapper');
      const container = document.querySelector('.skill-container');
      
      if (!container || !wrappers.length) return;
      if (window.innerWidth <= 768) return; // Mobile

      let isDragging = false;
      let currentBubble = null;
      let offsetX = 0;
      let offsetY = 0;
      let hasMoved = false;
      let startX = 0;
      let startY = 0;

      // ============ DRAG & DROP ============
      wrappers.forEach(wrapper => {
        const bubble = wrapper.querySelector('.skill-bubble');
        if (!bubble) return;
        
        bubble.addEventListener('mousedown', function(e) {
          isDragging = true;
          currentBubble = wrapper;
          hasMoved = false;
          startX = e.clientX;
          startY = e.clientY;
          
          const containerRect = container.getBoundingClientRect();
          const wrapperRect = wrapper.getBoundingClientRect();
          
          // Calculer l'offset relatif au wrapper
          offsetX = e.clientX - wrapperRect.left;
          offsetY = e.clientY - wrapperRect.top;
          
          bubble.classList.add('mouse-active');
          wrapper.style.zIndex = '1000';
          e.preventDefault();
        });
        
        // Empêcher le clic si on a drag - en mode capture pour intercepter avant propagation
        bubble.addEventListener('click', function(e) {
          if (hasMoved) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            return false;
          }
        }, true);
      });

      document.addEventListener('mousemove', function(e) {
        if (isDragging && currentBubble) {
          // Détecter si on a bougé de plus de 3px (seuil pour éviter les micro-mouvements)
          const distX = Math.abs(e.clientX - startX);
          const distY = Math.abs(e.clientY - startY);
          if (distX > 3 || distY > 3) {
            hasMoved = true;
          }
          
          const containerRect = container.getBoundingClientRect();
          
          // Position de la souris relative au conteneur
          let x = e.clientX - containerRect.left - offsetX;
          let y = e.clientY - containerRect.top - offsetY;
          
          const wrapperSize = currentBubble.offsetWidth;
          const margin = 2;
          
          // Contraindre la position
          x = Math.max(margin, Math.min(x, containerRect.width - wrapperSize - margin));
          y = Math.max(margin, Math.min(y, containerRect.height - wrapperSize - margin));
          
          // Appliquer directement en pixels pour le drag
          currentBubble.style.left = x + 'px';
          currentBubble.style.top = y + 'px';
          
          // Mettre à jour les variables CSS pour cohérence
          currentBubble.style.setProperty('--x', (x / containerRect.width * 100) + '%');
          currentBubble.style.setProperty('--y', (y / containerRect.height * 100) + '%');
        }
      });

      document.addEventListener('mouseup', function() {
        isDragging = false;
        if (currentBubble) {
          const bubble = currentBubble.querySelector('.skill-bubble');
          currentBubble.style.zIndex = '';
          if (bubble) bubble.classList.remove('mouse-active');
          
          // Réinitialiser hasMoved après un délai court
          setTimeout(() => {
            hasMoved = false;
          }, 50);
        }
        currentBubble = null;
      });

      // ============ SUIVI SOURIS ============
      let mouseX = 0;
      let mouseY = 0;
      let isInside = false;

      container.addEventListener('mouseenter', () => isInside = true);
      container.addEventListener('mouseleave', () => {
        isInside = false;
        wrappers.forEach(wrapper => {
          const bubble = wrapper.querySelector('.skill-bubble');
          if (bubble) {
            bubble.classList.remove('mouse-active');
            bubble.style.transform = '';
          }
        });
      });

      container.addEventListener('mousemove', function(e) {
        if (isDragging) return;
        const rect = container.getBoundingClientRect();
        mouseX = e.clientX - rect.left;
        mouseY = e.clientY - rect.top;
      });

      // Replacer les bulles dans le cadre
      function constrainWrapper(wrapper) {
        const containerRect = container.getBoundingClientRect();
        const x = parseFloat(wrapper.style.getPropertyValue('--x')) || 50;
        const y = parseFloat(wrapper.style.getPropertyValue('--y')) || 50;
        const wrapperSize = wrapper.offsetWidth;
        const margin = 20; // Augmenté pour laisser de la place à l'animation
        
        let xPx = (x / 100) * containerRect.width;
        let yPx = (y / 100) * containerRect.height;
        
        xPx = Math.max(margin, Math.min(xPx, containerRect.width - wrapperSize - margin));
        yPx = Math.max(margin, Math.min(yPx, containerRect.height - wrapperSize - margin));
        
        wrapper.style.setProperty('--x', (xPx / containerRect.width * 100) + '%');
        wrapper.style.setProperty('--y', (yPx / containerRect.height * 100) + '%');
      }

      // Animation
      function animate() {
        requestAnimationFrame(animate);
        
        if (!isInside || isDragging) return;
        
        const rect = container.getBoundingClientRect();
        
        wrappers.forEach(wrapper => {
          const bubble = wrapper.querySelector('.skill-bubble');
          if (!bubble) return;
          
          const wrapperRect = wrapper.getBoundingClientRect();
          const wrapperSize = wrapper.offsetWidth;
          const centerX = wrapperRect.left + wrapperSize / 2 - rect.left;
          const centerY = wrapperRect.top + wrapperSize / 2 - rect.top;
          
          const dx = mouseX - centerX;
          const dy = mouseY - centerY;
          const dist = Math.sqrt(dx * dx + dy * dy);
          
          const maxRadius = 160; // Zone d'influence
          const minRadius = wrapperSize / 2 + 5; // Deadzone réduite
          const smoothZone = 20; // Zone de transition douce
          
          // Si dans la zone d'influence
          if (dist < maxRadius && dist > minRadius) {
            if (!wrapper.hasAttribute('data-constrained')) {
              constrainWrapper(wrapper);
              wrapper.setAttribute('data-constrained', 'true');
            }
            
            bubble.classList.add('mouse-active');
            
            const effectiveRange = maxRadius - minRadius;
            const effectiveDist = dist - minRadius;
            let normalizedForce = (effectiveRange - effectiveDist) / effectiveRange;
            
            // Appliquer un smoothing près de la deadzone
            if (effectiveDist < smoothZone) {
              const smoothFactor = effectiveDist / smoothZone;
              normalizedForce *= smoothFactor; // Réduction progressive de la force
            }
            
            const force = Math.pow(normalizedForce, 2);
            
            const moveX = (dx / dist) * force * 25;
            const moveY = (dy / dist) * force * 25;
            const scale = 1 + force * 0.12;
            
            bubble.style.transition = 'transform 0.15s ease-out';
            bubble.style.transform = `translate(${moveX}px, ${moveY}px) scale(${scale})`;
          } else {
            bubble.classList.remove('mouse-active');
            bubble.style.transition = 'transform 0.4s ease-out';
            bubble.style.transform = '';
          }
        });
      }
      
      animate();
    });
  </script>

  <!-- Tableau détaillé des technologies -->
  <div class="w-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Section Langages de programmation -->
      <div class="bg-gradient-to-r from-stone-700/30 to-stone-700/30 rounded-lg p-6 md:p-8 border border-stone-700">
        <h3 class="text-xl font-bold text-orange-500 mb-4 flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
          </svg>
          Langages
        </h3>
        <div class="grid grid-cols-2 gap-x-6 gap-y-3">
          <?php
          // Affichage des technologies cliquables
          foreach ($clickableFiles as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            $nom_techno = str_replace(' ', '_', $fileName);
            echo "<div class='flex items-center gap-2 mb-2 transition duration-300 hover:transform hover:translate-x-1'>";
            include 'base.php';
            echo "</div>";
          }

          // Affichage des langages non-cliquables
          foreach ($nonClickableFiles1 as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            echo "<div class='flex items-center gap-2 mb-2 transition duration-300 hover:transform hover:translate-x-1'>";
            echo "<img src='assets/icons/techno-autre/language/$file' alt='$fileName' class='w-5 h-5 ml-4'>";
            echo "<span class='text-gray-300'>$fileName</span>";
            echo "</div>";
          }
          ?>
        </div>
      </div>

      <!-- Section Outils -->
      <div class="bg-gradient-to-r from-stone-700/30 to-stone-700/30 rounded-lg p-6 md:p-8 border border-stone-700">
        <h3 class="text-xl font-bold text-orange-500 mb-4 flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          Outils
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-3">
          <?php
          // Affichage des outils
          foreach ($nonClickableFiles2 as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            echo "<div class='flex items-center gap-2 mb-2 transition duration-300 hover:transform hover:translate-x-1'>";
            echo "<img src='assets/icons/techno-autre/outil/$file' alt='$fileName' class='w-5 h-5 ml-4'>";
            echo "<span class='text-gray-300'>$fileName</span>";
            echo "</div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
