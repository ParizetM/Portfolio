<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Des mineurs - Portfolio Martin Parizet</title>
    <!-- Tailwind is assumed to be included in your main template -->
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">
    <script src="https://unpkg.com/photoswipe@5/dist/photoswipe.umd.min.js"></script>


</head>
<style>
    @font-face {
    font-family: minecraft;
    src: url('projets/2/fonts/Minecraft.ttf');
}
    .minecraft-btn {
        background-image: url('projets/2/medias/Bouton_minecraft.png');
        font-family: 'minecraft';
        border-color: #AAA #565656 #565656 #AAA;
        outline: 2px solid #000;
        cursor: url('projets/2/medias/pioche.png') 0 16, auto;
        font-family: 'minecraft', sans-serif;
    }

    .minecraft-btn:hover {
        background-image: url('projets/2/medias/Bouton_minecraft_hover.png');
        border-color: #BDC6FF #59639A #59639A #BDC6FF;
    }
</style>
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
                $project['technologies'] = ["PHP", "HTML", "CSS", "JavaScript", "MySQL", "TailwindCSS"];
                foreach ($project['technologies'] as $nom_techno) {
                    include 'base.php'; // Assuming this file contains the logic to display technology badges
                }
                ?>
            </div>
            <p class="text-gray-400 text-xl max-w-3xl">
                Réinvention du célèbre jeu du Démineur avec une direction artistique inspirée de Minecraft, offrant une expérience familière mais revisitée avec un univers graphique cubique et ludique.
            </p>
        </header>

        <!-- Project details -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <div class="lg:col-span-2 flex flex-col items-center justify-center gap-4">
            <div  id="gallery1">
                <a href="projets/2/medias/accueil.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/2/medias/accueil.png" alt="Capture d'écran de Des mineurs" class="rounded-lg shadow-lg w-full object-cover h-auto hover:opacity-75 transition duration-300">
                </a>
            </div>
            <a href="https://des-mineurs.agfagoofay.fr" class="minecraft-btn mx-auto w-full text-center text-white truncate p-1 pl-20 pr-20 border-2 border-b-4 hover:text-yellow-200 transition-none">Jouer</a>

            </div>
            <div class="bg-stone-800/50 p-6 rounded-lg">

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Période</h3>
                    <p class="text-white">Développement intensif d'une semaine</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Client/Contexte</h3>
                    <p class="text-white">Projet scolaire transformé en initiative personnelle</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Mon rôle</h3>
                    <p class="text-white">Développement des mécaniques de jeu et interface de grille</p>
                </div>


                <div class="mb-4">
                    <h3 class="text-gray-400 mb-1">Lien</h3>
                    <div class="flex gap-4 mt-2">
                        <a href="https://github.com/ParizetM/Des-mineurs" target="_blank" class="text-orange-500 hover:text-yellow-400 transition duration-300 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                            Code source
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
                    "Des mineurs" est né d'un projet étudiant simple qui s'est transformé en une véritable aventure créative. Alors que l'exercice initial demandait simplement de créer un démineur basique, nous avons décidé avec un camarade de pousser le concept beaucoup plus loin en fusionnant l'univers du jeu Minecraft avec les mécaniques classiques du démineur.
                </p>
                <p class="text-gray-300 mb-4">
                    L'objectif du jeu reste fidèle à l'original : marquer toutes les bombes avec un drapeau sans en faire exploser une seule. Notre touche personnelle réside dans l'habillage visuel et sonore inspiré de Minecraft, avec des blocs, des sons et des animations qui rappellent l'univers cubique du jeu de Mojang.
                </p>
                <p class="text-gray-300 mb-4">
                    Nous avons également enrichi l'expérience avec des fonctionnalités supplémentaires, comme un système de vies permettant de continuer sa partie même après avoir fait exploser une bombe, ainsi que différents niveaux de difficulté qui modifient la taille de la grille et le nombre de bombes.
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
                            <img src="assets/icons/grid_3x3_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Grille de jeu personnalisable</h3>
                    </div>
                    <p class="text-gray-300">
                        Plusieurs niveaux de difficulté permettant d'ajuster la taille de la grille de jeu et le nombre de bombes. Les joueurs peuvent choisir entre une partie facile pour débuter ou un défi plus intense avec une grille plus large et davantage de bombes à détecter.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/favorite_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Système de vies</h3>
                    </div>
                    <p class="text-gray-300">
                        Contrairement au démineur classique où une seule erreur est fatale, notre version intègre un système de cœurs permettant de survivre à plusieurs explosions. Le nombre de vies peut être configuré dans les paramètres, offrant ainsi une expérience adaptée à tous les niveaux de joueurs.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/timer_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Chronomètre de partie</h3>
                    </div>
                    <p class="text-gray-300">
                        Un timer précis permet de mesurer le temps nécessaire pour terminer chaque partie, ajoutant ainsi un élément de challenge personnel. Les joueurs peuvent tenter d'améliorer leur temps à chaque nouvelle tentative, rendant l'expérience encore plus addictive.
                    </p>
                </div>

                <div class="bg-stone-800/50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="bg-orange-600 p-2 rounded-lg mr-4">
                            <img src="assets/icons/celebration_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                        </div>
                        <h3 class="text-xl font-bold text-white">Animations et effets sonores</h3>
                    </div>
                    <p class="text-gray-300">
                        Des animations spectaculaires et des effets sonores fidèles à l'univers Minecraft enrichissent l'expérience de jeu. Une pluie de diamants célèbre la victoire, tandis que des explosions visuelles et sonores marquent les erreurs. Un système d'achievements à la Minecraft apparaît également pour féliciter le joueur.
                    </p>
                </div>
            </div>
        </section>

        <!-- Screenshots/Gallery -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Galerie</h2>
            <div id="gallery" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="projets/2/medias/accueil.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/2/medias/accueil.png" alt="Partie en cours"
                        class="rounded-lg shadow-lg w-full object-cover hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/2/medias/jeu.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/2/medias/jeu.png" alt="Animation d'explosion"
                        class="rounded-lg shadow-lg w-full object-cover hover:opacity-75 transition duration-300">
                </a>
                <a href="projets/2/medias/victoire.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/2/medias/victoire.png" alt="Écran de victoire"
                        class="rounded-lg shadow-lg w-full object-cover hover:opacity-75 transition duration-300">
                </a>

                <a href="projets/2/medias/defaite.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/2/medias/defaite.png" alt="Game Over"
                        class="rounded-lg shadow-lg w-full object-cover hover:opacity-75 transition duration-300">
                </a>

                <a href="projets/2/medias/parametres.png" data-pswp-width="1600" data-pswp-height="850" target="_blank">
                    <img src="projets/2/medias/parametres.png" alt="Paramètres du jeu"
                        class="rounded-lg shadow-lg w-full object-cover hover:opacity-75 transition duration-300">
                </a>
            </div>
        </section>

        <!-- Challenges and Solutions -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Défis & Solutions</h2>
            <div class="bg-stone-800/50 p-6 rounded-lg mb-6">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 1: Algorithme de génération du tableau de jeu</h3>
                <p class="text-gray-300 mb-4">
                    L'un des défis majeurs a été de créer un algorithme qui génère aléatoirement les bombes tout en garantissant que la première case cliquée par le joueur ne contienne jamais de bombe, ce qui aurait rendu l'expérience de jeu frustrante.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    J'ai implémenté un système qui initialise la grille uniquement après le premier clic du joueur. L'algorithme place ensuite les bombes aléatoirement en excluant la case choisie par le joueur et ses cases adjacentes, offrant ainsi un début de partie toujours équitable et stratégique.
                </p>
            </div>

            <div class="bg-stone-800/50 p-6 rounded-lg mb-6">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 2: Révélation automatique des cases vides</h3>
                <p class="text-gray-300 mb-4">
                    La fonctionnalité qui dévoile automatiquement les cases adjacentes lorsqu'une case vide est cliquée a été particulièrement complexe à implémenter, nécessitant un algorithme récursif efficace.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    J'ai développé un algorithme de parcours en profondeur (DFS) qui explore récursivement toutes les cases adjacentes à une case vide, s'arrêtant uniquement lorsqu'il rencontre des cases contenant des nombres. Cette approche permet de révéler rapidement de grandes zones sans bombes, tout en maintenant les performances du jeu même sur des grilles de grande taille.
                </p>
            </div>

            <div class="bg-stone-800/50 p-6 rounded-lg">
                <h3 class="text-xl font-bold text-orange-500 mb-3">Défi 3: Compatibilité avec les appareils mobiles</h3>
                <p class="text-gray-300 mb-4">
                    Une limitation technique importante a été l'incompatibilité de certaines fonctionnalités JavaScript avec les navigateurs mobiles, empêchant le jeu de fonctionner correctement sur smartphones et tablettes.
                </p>
                <h4 class="text-lg font-semibold text-white mb-2">Solution:</h4>
                <p class="text-gray-300">
                    Bien que cette limitation n'ait pas été entièrement résolue dans la version actuelle, nous avons identifié les points problématiques et planifié une refonte de ces fonctionnalités en utilisant des alternatives plus compatibles avec les navigateurs mobiles. Cette amélioration fait partie des développements futurs prévus pour le jeu.
                </p>
            </div>
        </section>

        <!-- What I learned -->
        <section class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">Ce que j'ai appris</h2>
            <div class="bg-gradient-to-r from-stone-800/50 to-stone-700/50 p-6 rounded-lg">
                <p class="text-gray-300 mb-4">
                    Ce projet, bien que relativement court, a été incroyablement enrichissant sur le plan technique et créatif, me permettant de développer plusieurs compétences clés.
                </p>
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-orange-500 mb-3">Compétences techniques</h3>
                    <ul class="list-disc pl-6 text-gray-300 space-y-2">
                        <li>Maîtrise approfondie de JavaScript pour la logique de jeu et la manipulation du DOM</li>
                        <li>Conception et implémentation d'algorithmes complexes (génération de grille, révélation récursive)</li>
                        <li>Intégration d'éléments visuels et sonores pour créer une expérience utilisateur immersive</li>
                        <li>Optimisation des performances pour gérer efficacement des grilles de grande taille</li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold text-orange-500 mb-3">Compétences transversales</h3>
                    <ul class="list-disc pl-6 text-gray-300 space-y-2">
                        <li>Collaboration efficace en binôme avec répartition des tâches selon les compétences</li>
                        <li>Transformation d'un projet académique simple en un produit plus ambitieux et abouti</li>
                        <li>Capacité à transformer une inspiration (Minecraft) en un produit original tout en respectant l'essence de l'œuvre originale</li>
                        <li>Identification des limitations techniques et planification d'améliorations futures</li>
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