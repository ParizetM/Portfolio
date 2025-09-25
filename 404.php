<?php
http_response_code(404);

?>
<div>
    <script>
        (function() {
            if (location.pathname.includes('404.php')) {
                const params = new URLSearchParams(location.search);
                if (!(location.pathname.endsWith('/index.php') && params.get('page') === '404')) {
                    location.replace('index.php?page=404');
                }
            }
        })();
    </script>
    <!-- Cercles décoratifs inspirés de home.php -->
    <div class="circle top-20 left-10 bg-orange-600/20"></div>
    <div class="circle top-160 right-0 bg-yellow-400/20"></div>

    <section class="flex flex-col items-center justify-center py-24 antialiased section">
        <div class="text-center p-6 max-w-3xl">
            <h1 class="text-6xl md:text-7xl font-extrabold text-white mb-4">404</h1>
            <h2 class="text-2xl md:text-3xl text-orange-600 mb-6">Page non trouvée</h2>
            <p class="text-gray-400 mb-6">Désolé, la page que vous cherchez n'existe pas ou a été déplacée.</p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="index.php?page=home" class="bg-gradient-to-r from-orange-600 to-yellow-400 py-3 px-6 rounded-full text-white font-semibold hover:shadow-lg transition">Retour à l'accueil</a>
                <a href="index.php?page=projets" class="bg-stone-700 hover:bg-stone-600 py-3 px-6 rounded-full text-white transition">Voir mes projets</a>
            </div>


        </div>

        <div class="mt-12 w-full max-w-5xl mx-auto">
            <!-- Mini aperçu des derniers projets (inspiré de home.php) -->
            <?php
            include 'get-projets.php';
            $count = 0;
            echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-6">';
            foreach ($projects as $project) {
                if ($count >= 2) break;
                $count++;
                include 'projet-preview.php';
            }
            echo '</div>';
            ?>
        </div>
    </section>

</div>