<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montaza - Portfolio Martin Parizet</title>
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
        <div class="mb-8">
            <a href="../index.php?page=projets" class="flex items-center text-orange-500 hover:text-yellow-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Retour aux projets
            </a>
        </div>

        <!-- Project header -->
        <header class="mb-12">
            <h1 class="text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl mb-4">
                Montaza
            </h1>
            <div class="flex flex-wrap gap-3 mb-6">
                <?php

                foreach ($project['technologies'] as $nom_techno) {
                    include 'base.php'; // Assuming this file contains the logic to display technology badges
                }
                ?>
            </div>
            <p class="text-gray-400 text-xl max-w-3xl">
                Logiciel de gestion interne sur mesure développé pour Atlantis Montaza, permettant de remplacer les processus papier et tableaux Excel par une solution numérique intuitive et centralisée.
            </p>
        </header>

        <!-- Project details -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <div class="lg:col-span-2" id="gallery1">
                <a href="projets/0/medias/dashboard.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/0/medias/dashboard.png" alt="Capture d'écran de Montaza" class="rounded-lg shadow-lg w-full object-cover h-auto hover:opacity-75 transition duration-300">
                </a>
            </div>
            <div class="bg-stone-800/50 p-6 rounded-lg">
                <h2 class="text-2xl font-bold mb-4 text-orange-500">Détails du projet</h2>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Période</h3>
                    <p class="text-white">Septembre 2024 - Août 2025 (année d'alternance)</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Client/Contexte</h3>
                    <p class="text-white">Projet professionnel pour Atlantis Montaza</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Mon rôle</h3>
                    <p class="text-white">Développeur full-stack & chef de projet</p>
                </div>


                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Lien</h3>
                    <div class="flex gap-4 mt-2">
                        <a href="https://github.com/ParizetM/montaza-laravel" target="_blank" class="text-orange-500 hover:text-yellow-400 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            GitHub
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
                    Montaza est né d'un constat simple : l'entreprise Atlantis Montaza avait investi dans un ERP qui ne correspondait pas à ses besoins spécifiques, et les employés étaient contraints d'utiliser des tableaux Excel complexes et des processus papier chronophages. En tant qu'alternant en BTS SIO SLAM, j'ai eu l'opportunité de développer une solution sur mesure pour répondre aux exigences précises de l'entreprise.
                </p>
                <p class="text-gray-300 mb-4">
                    Ce logiciel de gestion interne permet maintenant de centraliser l'ensemble des données de l'entreprise : commandes, demandes de prix, suivi des affaires et dossiers, et gestion des stocks de matières premières. L'interface intuitive, développée avec Laravel et TailwindCSS, offre une navigation fluide et adaptée aux différents profils d'utilisateurs de l'entreprise, réduisant considérablement le temps passé sur les tâches administratives.
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
                            <img src="assets/icons/groups_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Gestion des utilisateurs et rôles</h3>
                    </div>
                    <p class="text-gray-300">
                        Système complet de gestion des permissions basé sur les rôles des employés dans l'entreprise, garantissant que chaque utilisateur n'accède qu'aux fonctionnalités pertinentes pour son poste. L'administration peut créer, modifier et désactiver des comptes, ainsi que personnaliser les droits d'accès.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/package_2_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">

                        </div>
                        <h3 class="text-xl font-bold text-white">Gestion des stocks</h3>
                    </div>
                    <p class="text-gray-300">
                        Module sophistiqué permettant de suivre l'inventaire avec différentes unités de mesure adaptées aux spécificités de chaque type de produit (mètres linéaires, unités, volume, etc.). Le système gère automatiquement les conversions et les alertes de stock bas, optimisant ainsi l'approvisionnement.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/request_quote_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">

                        </div>
                        <h3 class="text-xl font-bold text-white">Demandes de prix</h3>
                    </div>
                    <p class="text-gray-300">
                        Interface permettant aux utilisateurs de créer des demandes de prix détaillées, avec génération automatique de documents PDF professionnels et envoi par email aux fournisseurs. Le système intègre un suivi des réponses et facilite la comparaison des offres pour une prise de décision optimisée.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/local_shipping_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">

                        </div>
                        <h3 class="text-xl font-bold text-white">Gestion des commandes</h3>
                    </div>
                    <p class="text-gray-300">
                        Module complet permettant de transformer facilement une demande de prix en commande, avec suivi du statut, historique des modifications, et génération automatique des bons de commande au format PDF. Le système est intégré à la gestion des stocks pour mettre à jour automatiquement l'inventaire à la réception des marchandises.
                    </p>
                </div>
            </div>
        </section>

        <!-- Screenshots/Gallery -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Galerie</h2>
            <div id="gallery" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="projets/0/medias/demande_de_prix.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/0/medias/demande_de_prix.png" alt="Interface de demande de prix"
                        class="rounded-lg shadow-lg w-full h-64 object-cover hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/0/medias/matieres.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/0/medias/matieres.png" alt="Gestion des stocks"
                        class="rounded-lg shadow-lg w-full h-64 object-cover hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/0/medias/societe.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/0/medias/societe.png" alt="Affichage d'une société"
                        class="rounded-lg shadow-lg w-full h-64 object-cover hover:opacity-75 transition duration-300">
                </a>
            </div>

        </section>

        <!-- Challenges and Solutions -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Défis & Solutions</h2>
            <div class="bg-stone-800/50 p-6 rounded-lg mb-6">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 1: Harmonisation des besoins utilisateurs</h3>
                <p class="text-gray-300 mb-4">
                    La principale difficulté a été de bien comprendre les besoins spécifiques des utilisateurs dans cette entreprise. Chaque employé avait des attentes différentes en fonction de son rôle, ce qui a nécessité une analyse approfondie pour concevoir une solution adaptée à tous, tout en restant simple et intuitive.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    J'ai pris le temps de discuter individuellement avec chaque utilisateur pour comprendre leurs besoins spécifiques et leurs contraintes. En organisant mon travail de manière structurée, j'ai pu identifier les points communs et les priorités, ce qui m'a permis de concevoir une solution qui répond aux attentes de tous de manière équilibrée.
                </p>
            </div>

            <div class="bg-stone-800/50 p-6 rounded-lg mb-6">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 2: Gestion autonome du projet</h3>
                <p class="text-gray-300 mb-4">
                    En tant que seul développeur sur ce projet d'envergure, j'ai dû assumer toutes les responsabilités, de l'analyse des besoins au déploiement final, en passant par le développement et les tests. La charge de travail était considérable et exigeait une organisation exemplaire.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    J'ai adopté une approche agile avec des cycles de développement courts, permettant de livrer régulièrement des fonctionnalités testables. J'ai également mis en place des outils de suivi de projet pour prioriser efficacement les tâches et gérer mon temps. Cette méthode m'a permis de maintenir un rythme de développement constant tout en assurant la qualité du code.
                </p>
            </div>

            <div class="bg-stone-800/50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 3: Modélisation complexe des stocks</h3>
                <p class="text-gray-300 mb-4">
                    La gestion des stocks a posé un défi technique complexe en raison de la variété des produits et des unités de mesure employées. Par exemple, certains tuyaux étaient mesurés en mètres linéaires, mais stockés sous forme de segments de longueurs variées (par exemple, 4 tuyaux de 6m et 3 tuyaux de 4m). Cette diversité nécessitait une solution capable de gérer à la fois les unités globales et les détails spécifiques des segments.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    J'ai conçu un modèle de données flexible capable de gérer différentes unités de mesure et des conversions automatiques. Le système permet de définir des règles spécifiques pour chaque type de produit et utilise une architecture de métadonnées pour stocker les informations variables. Cette approche a permis de créer une solution évolutive qui s'adapte aux spécificités de tous les types de produits gérés par l'entreprise.
                </p>
            </div>
        </section>

        <!-- What I learned -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Ce que j'ai appris</h2>
            <div class="bg-gradient-to-r from-stone-800/50 to-stone-700/50 p-6 rounded-lg">
                <p class="text-gray-300 mb-4">
                    Ce projet d'alternance a été extrêmement formateur, tant sur le plan technique que sur le plan humain et professionnel. Il m'a permis de développer des compétences essentielles qui me serviront tout au long de ma carrière.
                </p>
                <ul class="list-disc pl-6 text-gray-300 space-y-2">
                    <li>Maîtrise approfondie du pattern MVC et des principes de programmation orientée objet avec Laravel</li>
                    <li>Conception et optimisation de bases de données complexes avec PostgreSQL</li>
                    <li>Développement d'interfaces utilisateur intuitives avec JavaScript et TailwindCSS</li>
                    <li>Analyse des besoins et traduction en spécifications techniques</li>
                    <li>Communication efficace avec différents types d'utilisateurs et parties prenantes</li>
                    <li>Gestion de projet en autonomie et priorisation des tâches</li>
                    <li>Résolution de problèmes complexes et capacité d'adaptation face aux imprévus</li>
                    <li>Capacité à concilier les besoins parfois contradictoires de différents utilisateurs</li>
                </ul>
            </div>
        </section>

        <!-- Navigation back to projects -->
        <div class="text-center">
            <a href="../index.php?page=projets" class="inline-block bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-6 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400 text-white">
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