<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FireVerif - Portfolio Martin Parizet</title>
    <!-- Tailwind is assumed to be included in your main template -->
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">
    <script src="https://unpkg.com/photoswipe@5/dist/photoswipe.umd.min.js"></script>

</head>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"></div>

<body class="bg-stone-900 text-white">
    <!-- Background circles for visual interest -->
    <div class="circle top-20 left-10 bg-orange-600/20"></div>
    <div class="circle top-160 right-0 bg-yellow-400/20"></div>
    <div class="circle top-340 right-120 bg-yellow-400/20"></div>
    <div class="circle top-640 right-160 bg-yellow-400/20"></div>

    <div class="container mx-auto px-4 py-8 max-w-5xl">
        <!-- Navigation back to projects -->
        <div class="mb-8 mt-24">
            <a href="index.php?page=projets" class="flex items-center text-orange-500 hover:text-yellow-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Retour aux projets
            </a>
        </div>

        <!-- Project header -->
        <header class="mb-12">
        <h1 class="text-3xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl mb-4 flex">
            <img src="<?= $project['logo'] ?>" alt="logo" class="mr-2 h-16 w-auto object-contain">

            <?= $project['title'] ?>
            </h1>
            <div class="flex flex-wrap gap-3 mb-6">
                <?php
                // Simulating technology badges display
                $project['technologies'] = ["PHP", "HTML", "JavaScript", "MySQL"];
                foreach ($project['technologies'] as $nom_techno) {
                    include 'base.php'; // Assuming this file contains the logic to display technology badges
                }
                ?>
            </div>
            <p class="text-gray-400 text-xl max-w-3xl">
                Application web développée pour le SDIS 44 permettant aux pompiers de réaliser leurs inventaires numériquement, remplaçant un processus papier chronophage par une solution centralisée et optimisée.
            </p>
        </header>

        <!-- Project details -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <div class="lg:col-span-2" id="gallery1">
                <a href="projets/1/medias/accueil-1.png" data-pswp-width="1700" data-pswp-height="700" target="_blank">
                    <img src="projets/1/medias/accueil-1.png" alt="Capture d'écran de FireVerif" class="rounded-lg shadow-lg w-full object-cover h-auto hover:opacity-75 transition duration-300">
                </a>
            </div>
            <div class="bg-stone-800/50 p-6 rounded-lg">
                <h2 class="text-2xl font-bold mb-4 text-orange-500">Détails du projet</h2>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Période</h3>
                    <p class="text-white">10 juin 2024 - 19 juillet 2024 (stage de 6 semaines)</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Client/Contexte</h3>
                    <p class="text-white">Stage chez Pixelcréation pour le SDIS 44</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Mon rôle</h3>
                    <p class="text-white">Développeur back-end en équipe</p>
                </div>


                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Lien</h3>
                    <div class="flex gap-4 mt-2">
                        <a href="https://fireverif.com/" target="_blank" class="text-orange-500 hover:text-yellow-400 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"></path>
                            </svg>
                            fireverif.com
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project description -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Le projet</h2>
            <div class="prose prose-lg prose-invert max-w-none">
                <p class="text-gray-300 mb-4">
                    FireVerif est né d'un besoin concret exprimé par le Service Départemental d'Incendie et de Secours de Loire-Atlantique (SDIS 44). Avant cette application, les pompiers effectuaient leurs inventaires et vérifications de véhicules sur papier, un processus chronophage qui générait des fiches parfois obsolètes ou incomplètes.
                </p>
                <p class="text-gray-300 mb-4">
                    Développée par une équipe de trois stagiaires chez Pixelcréation, cette application web responsive permet désormais aux pompiers de réaliser leurs inventaires sur tablette ou smartphone. Toutes les données sont centralisées, ce qui facilite le suivi des équipements et l'analyse des tendances d'utilisation du matériel dans les véhicules de service.
                </p>
                <p class="text-gray-300 mb-4">
                    Initialement conçue pour la caserne de Savenay, l'application est destinée à être déployée progressivement dans l'ensemble du SDIS 44, démontrant ainsi son utilité et sa valeur ajoutée pour les services d'incendie et de secours.
                </p>
            </div>
        </section>

        <!-- Features/Functionalities -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Fonctionnalités</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                    <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/local_shipping_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Inventaire digital des véhicules</h3>
                    </div>
                    <p class="text-gray-300">
                        Interface intuitive permettant aux pompiers de vérifier rapidement les équipements présents dans chaque véhicule d'intervention. Le système remplace efficacement les fiches papier, réduisant le temps nécessaire pour les inventaires tout en améliorant la précision des données collectées.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                    <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/monitoring_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Statistiques et tendances</h3>
                    </div>
                    <p class="text-gray-300">
                        Module d'analyse permettant aux responsables d'examiner les tendances d'utilisation du matériel et l'état des véhicules. Les données centralisées facilitent l'identification des équipements fréquemment défectueux ou manquants, permettant une meilleure planification des achats et des maintenances.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                    <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/report_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Gestion des erreurs de vérification</h3>
                    </div>
                    <p class="text-gray-300">
                        Système complet permettant de signaler, documenter et suivre les problèmes liés aux équipements. Les utilisateurs peuvent décrire précisément les défauts constatés, et les responsables peuvent ensuite appliquer des corrections. Toutes les actions sont tracées, créant ainsi un historique complet pour chaque équipement.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                    <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/delivery_truck_speed_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Transfert inter-casernes</h3>
                    </div>
                    <p class="text-gray-300">
                        Fonctionnalité permettant de dupliquer ou transférer temporairement des véhicules d'une caserne à l'autre, facilitant ainsi la gestion des renforts. Cette option assure la continuité des inventaires même lors des déplacements d'équipements, garantissant que chaque caserne dispose toujours d'informations à jour.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                    <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/pdf.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Exportation PDF</h3>
                    </div>
                    <p class="text-gray-300">
                        Possibilité d'exporter les fiches de vérification au format PDF, permettant aux pompiers d'avoir accès aux informations même en cas de panne informatique. Cette fonctionnalité assure une transition en douceur entre le système papier traditionnel et la solution numérique, offrant ainsi un filet de sécurité pour les situations d'urgence.
                    </p>
                </div>
            </div>
        </section>

        <!-- Screenshots/Gallery -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Galerie</h2>
            <div id="gallery" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="projets/1/medias/Dashboard.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/1/medias/Dashboard.png" alt="Tableau de bord principal"
                        class="rounded-lg shadow-lg w-full  object-cover hover:opacity-75 transition duration-300">
                </a>
                
                <a href="projets/1/medias/Prise_de_garde.png" data-pswp-width="1618" data-pswp-height="868" target="_blank">
                    <img src="projets/1/medias/Prise_de_garde.png" alt="Prise de garde"
                        class="rounded-lg shadow-lg w-full  object-cover hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/1/medias/recap_verif.png" data-pswp-width="1556" data-pswp-height="957" target="_blank">
                    <img src="projets/1/medias/recap_verif.png" alt="Récapitulatif des vérifications"
                        class="rounded-lg shadow-lg w-full  object-cover hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/1/medias/stats.png" data-pswp-width="1562" data-pswp-height="908" target="_blank">
                    <img src="projets/1/medias/stats.png" alt="Statistiques"
                        class="rounded-lg shadow-lg w-full  object-cover hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/1/medias/Vehicule.png" data-pswp-width="1748" data-pswp-height="958" target="_blank">
                    <img src="projets/1/medias/Vehicule.png" alt="Gestion des véhicules"
                        class="rounded-lg shadow-lg w-full  object-cover hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/1/medias/interface_verif.png" data-pswp-width="1150" data-pswp-height="900" target="_blank">
                    <img src="projets/1/medias/interface_verif.png" alt="Interface de vérification"
                        class="rounded-lg shadow-lg w-full  object-cover hover:opacity-75 transition duration-300">
                </a>
            </div>
        </section>

        <!-- Challenges and Solutions -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Défis & Solutions</h2>
            <div class="bg-stone-800/50 p-6 rounded-lg mb-6">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 1: Développement sur l'environnement de production</h3>
                <p class="text-gray-300 mb-4">
                    Un défi majeur a été de devoir travailler directement sur le serveur de production, nécessitant une vigilance constante pour éviter toute perturbation du service lors des mises à jour et des modifications.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    Nous avons mis en place un processus rigoureux de validation avant chaque déploiement, avec des tests systématiques et des points de contrôle réguliers. Nous avons également adopté une approche de développement par petites itérations pour minimiser les risques d'erreurs majeures.
                </p>
            </div>

            <div class="bg-stone-800/50 p-6 rounded-lg mb-6">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 2: Respect des normes de sécurité du SDIS 44</h3>
                <p class="text-gray-300 mb-4">
                    Le projet devait répondre à des exigences strictes en matière de sécurité des données, conformément aux normes établies par le SDIS 44, un organisme public manipulant des informations sensibles.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    Nous avons implémenté des protocoles de sécurité renforcés, notamment en matière d'authentification et de chiffrement des données. Chaque fonctionnalité a été conçue en tenant compte des exigences de sécurité, et nous avons travaillé en étroite collaboration avec les responsables IT du SDIS pour valider nos approches.
                </p>
            </div>

            <div class="bg-stone-800/50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 3: Adaptation aux besoins spécifiques des pompiers</h3>
                <p class="text-gray-300 mb-4">
                    Comprendre et intégrer les besoins particuliers des pompiers a représenté un défi important. L'application devait être suffisamment intuitive pour être utilisée rapidement dans le contexte parfois stressant d'une caserne, tout en étant complète et précise.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    Nous avons organisé plusieurs sessions d'observation et d'échange avec les pompiers de la caserne de Savenay pour comprendre leurs processus et contraintes. L'interface a été simplifiée au maximum, avec des parcours utilisateurs optimisés pour réduire le nombre de clics nécessaires et accélérer les vérifications.
                </p>
            </div>
        </section>

        <!-- What I learned -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Ce que j'ai appris</h2>
            <div class="bg-gradient-to-r from-stone-800/50 to-stone-700/50 p-6 rounded-lg">
                <p class="text-gray-300 mb-4">
                    Ce stage a été une expérience extrêmement enrichissante qui m'a permis d'appliquer mes connaissances théoriques dans un contexte professionnel concret et de développer de nouvelles compétences.
                </p>
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-orange-500 mb-3">Compétences techniques</h3>
                    <ul class="list-disc pl-6 text-gray-300 space-y-2"></ul>
                        <li>Développement back-end avec PHP et MySQL dans un projet d'envergure</li>
                        <li>Application des normes de sécurité strictes dans un contexte de service public</li>
                        <li>Respect d'un cahier des charges et d'une direction artistique préétablie</li>
                        <li>Gestion d'un projet de A à Z, de l'analyse des besoins au déploiement</li>
                        <li>Adaptabilité face aux contraintes et aux imprévus techniques</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold text-orange-500 mb-3">Compétences transversales</h3>
                    <ul class="list-disc pl-6 text-gray-300 space-y-2">
                        <li>Collaboration efficace en équipe, tant en présentiel qu'à distance</li>
                        <li>Organisation et répartition des tâches selon les compétences de chacun</li>
                        <li>Communication avec des utilisateurs finaux et traduction de leurs besoins en solutions techniques</li>
                        <li>Capacité d'adaptation aux méthodes de travail d'une entreprise établie</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Navigation back to projects -->
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