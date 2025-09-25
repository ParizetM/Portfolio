<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de ticketing - Portfolio Martin Parizet</title>
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">
    <script src="https://unpkg.com/photoswipe@5/dist/photoswipe.umd.min.js"></script>
    <!-- Tailwind / styles globaux sont chargés par le template principal du portfolio -->
</head>
<style>
    .pswp { display:none }
</style>

<body class="bg-stone-900 text-white">
    <!-- Background circles for visual interest (matching projet 2) -->
    <div class="circle top-20 left-10 bg-orange-600/20"></div>
    <div class="circle top-160 right-0 bg-yellow-400/20"></div>
    <div class="circle top-340 right-120 bg-yellow-400/20"></div>
    <div class="circle top-640 right-160 bg-yellow-400/20"></div>

    <div class="container mx-auto px-4 py-8 max-w-5xl">
        <div class="mb-8 mt-24">
            <a href="index.php?page=projets" class="flex items-center text-orange-500 hover:text-yellow-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Retour aux projets
            </a>
        </div>

        <header class="mb-12">
            <h1 class="text-3xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl mb-4 flex">
            <img src="<?= isset($project['logo']) ? $project['logo'] : 'assets/icons/report_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg' ?>" alt="logo" class="mr-2 h-16 w-auto object-contain">

            Plateforme de ticketing collaborative
            </h1>
            <div class="flex flex-wrap gap-3 mb-6">
                <?php
                // Utiliser le helper existant si présent pour cohérence visuelle
                $project['technologies'] = ["PHP", "MySQL", "HTML", "CSS", "JavaScript", "TailwindCSS"];
                foreach ($project['technologies'] as $nom_techno) {
                    if (file_exists(__DIR__.'/../includes/tech-functions.php')) {
                        include __DIR__.'/../base.php';
                    } else {
                        echo '<span class="bg-white/10 text-white/90 px-3 py-1 rounded-full text-sm">'.htmlspecialchars($nom_techno).'</span>';
                    }
                }
                ?>
            </div>
            <p class="text-gray-400 text-xl max-w-3xl">
                Application de gestion de tickets développée en équipe (3 personnes) — hiérarchie des rôles, redirection des tickets vers des pôles, chat en direct par ticket, statuts avancés et archivage (avril 2024).
            </p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <div class="lg:col-span-2 flex flex-col items-center justify-center gap-4">
            <div  id="gallery1">
                <a href="projets/3/medias/dashboard.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/3/medias/dashboard.png" alt="Capture d'écran du dashboard" class="rounded-lg shadow-lg w-full object-cover h-auto hover:opacity-75 transition duration-300">
                </a>
            </div>

            </div>
            <div class="bg-stone-800/50 p-6 rounded-lg">

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Période</h3>
                    <p class="text-white">Projet de groupe — avril 2024</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Client/Contexte</h3>
                    <p class="text-white">Projet scolaire — prototype fonctionnel pour gestion de tickets</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Mon rôle</h3>
                    <p class="text-white">Backend (modèles, routage), intégration chat temps réel, scripts d'archivage.</p>
                </div>


                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Lien</h3>
                    <div class="flex gap-4 mt-2">
                        <a href="https://github.com/ParizetM/" target="_blank" class="text-orange-500 hover:text-yellow-400 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            Code source
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Le projet</h2>
            <div class="prose prose-lg prose-invert max-w-none">
                <p class="text-gray-300 mb-4">
                    Plateforme de ticketing conçue pour centraliser les demandes, faciliter la répartition entre pôles et permettre une communication rapide entre utilisateur et techniciens via un chat intégré à chaque ticket.
                </p>
                <p class="text-gray-300 mb-4">
                    Le système gère une hiérarchie claire (admin → chef de pôle → agent) permettant aux admins de rediriger des tickets vers des pôles spécifiques ou d'assigner manuellement un agent. Un historique de statuts et d'actions est conservé pour audit.
                </p>
                <p class="text-gray-300 mb-4">
                    L'archivage automatique a été implémenté en avril 2024 : tickets inactifs peuvent être archivés via un script CRON, avec option d'export CSV pour conservation.
                </p>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Fonctionnalités</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/grid_3x3_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Hiérarchie & Permissions</h3>
                    </div>
                    <p class="text-gray-300">
                        Gestion des rôles (admin, chef de pôle, agent) avec permissions serveur pour chaque action critique.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/favorite_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Routage & redirection</h3>
                    </div>
                    <p class="text-gray-300">
                        Redirection manuelle ou automatique des tickets vers les pôles selon règles et mots-clés.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/timer_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Chat en direct</h3>
                    </div>
                    <p class="text-gray-300">
                        Fil de discussion temps réel dans chaque ticket (polling / WebSocket selon déploiement) pour faciliter la résolution.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/celebration_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Statuts & Historique</h3>
                    </div>
                    <p class="text-gray-300">
                        Statuts : Nouveau, En cours, En attente, Résolu, Archivé — chaque changement est horodaté et historisé.
                    </p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Galerie</h2>
            <div id="gallery" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

                <a href="projets/3/medias/ticket.png" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                    <img src="projets/3/medias/ticket.png" alt="Détail ticket" class="rounded-lg shadow-lg w-full hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/3/medias/reglage.png" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                    <img src="projets/3/medias/reglage.png" alt="Chat intégré au ticket" class="rounded-lg shadow-lg w-full hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/3/medias/a_propos.png" data-pswp-width="1200" data-pswp-height="900" target="_blank">
                    <img src="projets/3/medias/a_propos.png" alt="Chat intégré au ticket" class="rounded-lg shadow-lg w-full hover:opacity-75 transition duration-300">
                </a>
            </div>
        </section>
        </section>

        <!-- What I learned / Compétences -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Ce que j'ai appris</h2>
            <div class="bg-gradient-to-r from-stone-800/50 to-stone-700/50 p-6 rounded-lg">
                <p class="text-gray-300 mb-4">
                    Ce projet de ticketing a permis de renforcer plusieurs compétences techniques et transversales en travaillant en équipe sur un contexte proche du terrain.
                </p>
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-orange-500 mb-3">Compétences techniques</h3>
                    <ul class="list-disc pl-6 text-gray-300 space-y-2">
                        <li>Conception et optimisation de schémas MySQL pour gérer tickets, messages et historique</li>
                        <li>Implémentation d'un système de permissions et d'assignation (roles & poles)</li>
                        <li>Intégration d'un chat temps réel (polling → WebSocket migration)</li>
                        <li>Scripts d'archivage automatisés et export CSV</li>
                        <li>Notification par email (création / assignation / changement de statut)</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold text-orange-500 mb-3">Compétences transversales</h3>
                    <ul class="list-disc pl-6 text-gray-300 space-y-2">
                        <li>Travail en équipe (coordination entre 3 développeurs et validation client)</li>
                        <li>Conduite d'un prototype depuis la spécification jusqu'au déploiement</li>
                        <li>Prise en compte des besoins métier pour prioriser les développements</li>
                        <li>Rédaction de documentation technique et procédures d'archivage</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="text-center">
            <a href="index.php?page=projets" class="inline-block bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-6 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400 text-white">
                Voir tous mes projets
            </a>
        </div>
    </div>
    <script type="module">
        import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.min.js';
        import PhotoSwipe from 'https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js';

        const lightbox = new PhotoSwipeLightbox({
            gallery: '#gallery',
            children: 'a',
            pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js')
        });
        const lightbox1 = new PhotoSwipeLightbox({
            gallery: '#gallery1',
            children: 'a',
            pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.min.js')
        });
        lightbox.on('uiElement:open', () => {
            document.body.style.overflow = 'hidden'; // Disable scrolling on the body
        });
        lightbox.init();
        lightbox1.init();
    </script>

</body>

</html>