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
                        if (scrollTop > originalPos + containerHeight) {
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
