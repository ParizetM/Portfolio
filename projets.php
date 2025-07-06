<?php
$directory = __DIR__ . '/assets/icons/technos';
$files = array_diff(scandir($directory), array('..', '.'));
$fileNames = array_map(function ($file) {
    return pathinfo($file, PATHINFO_FILENAME);
}, $files);
?>

<!-- Background circles for visual interest -->
<div class="circle top-20 left-10 bg-orange-600/20"></div>
<div class="circle top-160 right-0 bg-yellow-400/20"></div>


<section class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section mt-16">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
            Mes Projets
        </h1>
        <p class="max-w-2xl mx-auto text-gray-400 md:mb-6 md:text-lg mb-3 lg:mb-5 lg:text-xl p-4">
            Découvrez tous mes projets professionnels et étudiants
        </p>
    </div>

    <div id="filters-container" class="mb-8 transition-all duration-300">
        <div class="flex items-center justify-center">
            <div id="filters-header" class="flex items-center justify-center mb-4 cursor-pointer  w-fit rounded-full px-6 py-3">
                <h2 class="text-xl font-bold text-white text-center whitespace-nowrap">Filtrer par technologie</h2>
                <svg id="chevron-icon" class="ml-2 w-6 h-6 text-white transform transition-transform duration-300 hidden" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>
        <div id="filters-content" class="flex flex-wrap p-2 gap-3 justify-center w-full max-w-4xl mx-auto bg-stone-600/30 rounded-lg transition-all duration-300">
            <a href="index.php?page=projets" class="<?= !isset($_GET['techno']) ? 'bg-gradient-to-r from-orange-600 to-yellow-400' : 'bg-stone-700 hover:bg-stone-600' ?> py-2 px-4 rounded-full transition duration-300 text-white">
                Tous
            </a>
            <?php
            foreach ($fileNames as $fileName) {
                if (isset($_GET['techno']) && $_GET['techno'] === $fileName) {
                    $isActive = true;
                } else {
                    $isActive = false;
                }
                $nom_techno = $fileName;
                include 'base.php';
            }
            ?>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto">
        <?php
        include 'get-projets.php';
        $projectCount = 0;

        foreach ($projects as $project) {
            if (isset($_GET['techno']) && !in_array($_GET['techno'], $project['technologies'])) {
                continue; // Skip this project if the technology doesn't match
            }

            $projectCount++;
            include 'projet-preview.php';
        }

        if ($projectCount === 0) {
            echo '<div class="col-span-2 text-center py-12">';
            echo '<p class="text-gray-400 text-xl">Aucun projet ne correspond à ce filtre.</p>';
            echo '<a href="projets.php" class="inline-block mt-4 bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400 text-white">Voir tous les projets</a>';
            echo '</div>';
        }
        ?>
    </div>
    <script>
        if (document.getElementById('filters-container')) {
            const filtersContainer = document.getElementById('filters-container');
            const filtersHeader = document.getElementById('filters-header');
            const filtersContent = document.getElementById('filters-content');
            const chevronIcon = document.getElementById('chevron-icon');

            let isSticky = false;
            let isCollapsed = false;
            let originalPosition = null;

            // Fonction pour calculer la position originale
            function getOriginalPosition() {
                if (!originalPosition) {
                    const rect = filtersContainer.getBoundingClientRect();
                    originalPosition = window.pageYOffset + rect.top + rect.height;
                }
                return originalPosition;
            }

            // Fonction pour activer le mode sticky
            function activateStickyMode() {
                if (!isSticky) {
                    isSticky = true;
                    filtersContainer.style.position = 'fixed';
                    filtersContainer.style.top = '95px';
                    filtersContainer.style.left = '50%';
                    filtersContainer.style.transform = 'translateX(-50%)';
                    filtersContainer.style.zIndex = '1000';
                    filtersContainer.style.width = 'auto';
                    filtersContainer.style.maxWidth = '90vw';
                    filtersContainer.classList.add('shadow-lg');
                    // Afficher le chevron et permettre le collapse
                    chevronIcon.classList.remove('hidden');
                    filtersHeader.style.cursor = 'pointer';

                    // Collapse automatiquement quand sticky
                    collapseFilters();
                    if (window.liquidGlassManager) {
                        // Appliquer l'effet liquid glass
                        window.liquidGlassManager.applyEffect(filtersHeader);
                    } else {
                        filtersHeader.classList.add('liquid-glass-fallback');
                        filtersContent.classList.add('liquid-glass-fallback');;
                    }


                }
            }

            // Fonction pour désactiver le mode sticky
            function deactivateStickyMode() {
                if (isSticky) {
                    isSticky = false;
                    filtersContainer.style.position = 'static';
                    filtersContainer.style.top = 'auto';
                    filtersContainer.style.left = 'auto';
                    filtersContainer.style.transform = 'none';
                    filtersContainer.style.zIndex = 'auto';
                    filtersContainer.style.width = 'auto';
                    filtersContainer.style.maxWidth = 'none';
                    filtersContainer.classList.remove('shadow-lg');

                    // Cacher le chevron et déployer les filtres
                    chevronIcon.classList.add('hidden');
                    expandFilters();
                    if (window.liquidGlassManager) {
                        // Retirer l'effet liquid glass
                        window.liquidGlassManager.removeEffect(filtersHeader);
                        window.liquidGlassManager.removeEffect(filtersContent);
                    } else {
                        filtersHeader.classList.remove('liquid-glass-fallback');
                        filtersContent.classList.remove('liquid-glass-fallback');
                    }
                }
            }

            // Fonction pour collapser les filtres
            function collapseFilters() {
                if (!isCollapsed) {
                    isCollapsed = true;
                    filtersContent.style.maxHeight = '0';
                    filtersContent.style.overflow = 'hidden';
                    filtersContent.style.opacity = '0';
                    chevronIcon.style.transform = 'rotate(-90deg)';
                }
            }

            // Fonction pour déployer les filtres
            function expandFilters() {
                if (isCollapsed) {
                    isCollapsed = false;
                    filtersContent.style.maxHeight = 'none';
                    filtersContent.style.overflow = 'visible';
                    filtersContent.style.opacity = '1';
                    chevronIcon.style.transform = 'rotate(0deg)';
                    if (window.liquidGlassManager) {
                        setTimeout(() => {

                            // Appliquer l'effet liquid glass
                            window.liquidGlassManager.removeEffect(filtersContent);
                            window.liquidGlassManager.applyEffect(filtersContent);
                        }, 200);
                    }

                }
            }

            // Toggle collapse/expand au clic sur le header
            filtersHeader.addEventListener('click', () => {
                if (isSticky) {
                    if (isCollapsed) {
                        expandFilters();
                    } else {
                        collapseFilters();
                    }
                }
            });

            // Observer le scroll
            let ticking = false;

            function handleScroll() {
                if (!ticking) {
                    requestAnimationFrame(() => {
                        const scrollTop = window.pageYOffset;
                        const originalPos = getOriginalPosition();
                        const containerHeight = filtersContainer.offsetHeight;

                        // Activer sticky si on a dépassé la position originale + hauteur du container
                        if (scrollTop > originalPos + containerHeight + 50) {
                            activateStickyMode();
                        } else if (scrollTop < originalPos + containerHeight) {
                            deactivateStickyMode();
                        }

                        ticking = false;
                    });
                    ticking = true;
                }
            }

            // Écouter le scroll
            window.addEventListener('scroll', handleScroll);

            // Recalculer la position lors du redimensionnement
            window.addEventListener('resize', () => {
                originalPosition = null;
                if (isSticky) {
                    deactivateStickyMode();
                }
            });
        }
    </script>
</section>