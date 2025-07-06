<!-- Cercles décoratifs d'arrière-plan -->
<div class="circle top-20 left-10 bg-orange-600/20"></div>
<div class="circle top-160 right-0 bg-yellow-400/20"></div>
<div class="circle top-160 right-0 bg-yellow-400/20"></div>
<div class="circle top-340 right-120 bg-yellow-400/20"></div>
<div class="circle top-510 right-50 bg-orange-600/20"></div>
<div class="circle top-640 right-160 bg-yellow-400/20"></div>
<div class="circle top-780 right-100 bg-orange-600/20"></div>
<div class="circle top-880 right-160 bg-orange-600/20"></div>
<div class="circle top-1000 right-160 bg-orange-600/20"></div>




<!-- Carré effet glass simple -->

<!-- Layout principal avec grille responsive -->
<div class="grid grid-cols-1 md:grid-cols-4 md:grid">
  <!-- Contenu principal -->
  <div class="col-span-3 text-gray-300">



    <!-- ========================================
         SECTION À PROPOS
    ======================================== -->
    <section id="about" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">
      <div class="text-center">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
          Martin Parizet
        </h1>
        <p class="max-w-2xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">
          PORTFOLIO 2025 - développeur
        </p>
        <p class="max-w-2xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-6">
          Développeur, je crée des sites web et applications.
          Actuellement en BTS SIO SLAM à l'IIA Saint-Nazaire, je cherche à améliorer mes compétences et à participer à des projets suceptible de développer mes compétences.
        </p>
        <div class="rounded-full flex items-center justify-center">
          <div onmousemove="followMouse(this, event)" onmouseleave="resetPosition(this)" class="rounded-full w-fit">
            <a href="#contact" class="bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400">
              Contactez-moi
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================
         SECTION MON PARCOURS
    ======================================== -->
    <section id="parcours" class="flex flex-wrap md:grid grid-cols-[3fr_1fr_3fr] gap-y-4 items-center justify-center py-8 antialiased md:py-16 section">
      <h1 class="text-center mb-8 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl col-span-3 w-full">
        Mon parcours
      </h1>

      <!-- Alternance Montaza -->
      <div class="ml-5 w-full md:w-auto">
        <div class="p-2 border-r-2 border-dashed text-right float-right bg-stone-600/50 rounded-l-lg w-full pr-5 md:pr-2">
          <p class="text-orange-500 text-sm md:text-base">Septembre 2024 - Actuellement</p>
          <h2 class="text-lg font-bold text-white md:text-xl">
            <span class="text-gray-300 text-base md:text-lg">ALTERNANCE</span><br>
            Atlantis Montaza <span class="text-gray-300 text-sm md:text-base">Trignac</span>
          </h2>
          <p class="text-gray-400 text-sm md:text-base">Dev Web PGI interne</p>
        </div>
      </div>
      <div class="p-2 justify-center items-center bg-stone-600/50 h-full rounded-r-lg hidden md:flex">
        <img src="assets/icons/montaza.svg" alt="Logo Montaza" class="w-15 h-15 m-1">
      </div>
      <div class="w-0"></div>

      <!-- Espacement -->
      <div class="w-0"></div>
      <div class="p-2 justify-center items-center bg-stone-600/50 h-full rounded-l-lg hidden md:flex">
        <img src="assets/icons/fireverif.svg" alt="Logo Fireverif" class="w-15 h-15 m-1 ml-6">
      </div>

      <!-- Stage Pixelcréation -->
      <div class="mr-5 w-full md:w-auto">
        <div class="block p-2 border-l-2 border-dashed bg-stone-600/50 mr-6 rounded-r-lg w-full pl-5 md:pl-2">
          <p class="text-orange-500 text-sm md:text-base">10/06/2024 - 19/07/2024</p>
          <h2 class="text-lg font-bold text-white md:text-xl">
            <span class="text-gray-300 text-base md:text-lg">STAGE</span><br>
            PIXELCRÉATION <span class="text-gray-300 text-sm md:text-base">Savenay</span>
          </h2>
          <p class="text-gray-400 text-sm md:text-base">Dev Web - application pompiers pour le sdis 44 FIREVERIF</p>
        </div>
      </div>

      <!-- Formation BTS SIO -->
      <div title="BTS Service Informatiques aux Organisations option Solutions Logicielles des Applications Métiers" class="ml-5 w-full md:w-auto">
        <div class="p-2 border-r-2 border-dashed text-right float-right bg-stone-600/50 ml-6 rounded-l-lg w-full pr-5 md:pr-2">
          <p class="text-orange-500 text-sm md:text-base">Septembre 2023 - Actuellement</p>
          <h2 class="text-lg font-bold text-white md:text-xl">
            <span class="text-gray-300 text-base md:text-lg">FORMATION</span><br>
            BTS SIO option SLAM <span class="text-gray-300 text-sm md:text-base"><br>Institut Informatique Appliquée<br>Saint-Nazaire</span>
          </h2>
          <p class="text-gray-400 text-sm md:text-base">Service Informatiques aux Organisations - Développement</p>
        </div>
      </div>
      <div class="p-2 justify-center items-center bg-stone-600/50 h-full rounded-r-lg hidden md:flex" title="BTS Service Informatiques aux Organisations option Solutions Logicielles des Applications Métiers">
        <img src="assets/icons/logo-iia-200x200.png" alt="Logo IIA" class="w-15 h-15 m-1 rounded-full md:w-20 md:h-20 sm:w-12 sm:h-12">
      </div>
      <div></div>

      <!-- Espacement -->
      <div></div>
      <div class="p-2 justify-center items-center bg-stone-600/50 h-full rounded-l-lg hidden md:flex">
        <img src="assets/icons/galilee.png" alt="Logo Galilée" class="w-15 h-15 m-1 rounded-full md:w-20 md:h-20 sm:w-12 sm:h-12">
      </div>

      <!-- Bac Général -->
      <div class="mr-5 w-full md:w-auto">
        <div class="block p-2 border-l-2 border-dashed bg-stone-600/50 mr-6 rounded-r-lg w-full pl-5 md:pl-2">
          <p class="text-orange-500 text-sm md:text-base">2023</p>
          <h2 class="text-lg font-bold text-white md:text-xl">
            <span class="text-gray-300 text-base md:text-lg">FORMATION</span><br>
            Bac Général <span class="text-gray-300 text-sm md:text-base">Guérande</span>
          </h2>
          <p class="text-gray-400 text-sm md:text-base">Maths - Physique-Chimie - Science de l'ingénieur</p>
        </div>
      </div>
    </section>



    <!-- ========================================
         SECTION EXPÉRIENCE & PROJETS
    ======================================== -->
    <?php include 'get-projets.php'; ?>

    <section id="experience" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">
      <!-- Projets professionnels -->
      <div class="section" id="experience_professionnelle">
        <h1 class="text-center mb-8 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl xl:text-6xl">
          Mon expérience<br>
          <span class="text-orange-600 text-3xl md:text-4xl xl:text-5xl">Mes projets<br>Professionnels</span>
        </h1>
        <div class="">
          <?php
          $project = $projects[0];
          include 'projet-preview.php';
          $project = $projects[1];
          include 'projet-preview.php';
          ?>
        </div>
      </div>

      <!-- Projets étudiants -->
      <div>
        <h1 class="text-center mb-8 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl xl:text-6xl section" id="experience_etudiante">
          <br>
          <span class="text-orange-600 text-3xl md:text-4xl xl:text-5xl">Mes projets<br>Étudiants</span>
        </h1>
        <div class="">
          <?php
          $project = $projects[2];
          include 'projet-preview.php';
          $project = $projects[3];
          include 'projet-preview.php';
          ?>
        </div>
      </div>
    </section>



    <!-- ========================================
         SECTION COMPÉTENCES & TECHNOLOGIES
    ======================================== -->
    <section id="competences" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">
      <h1 class="text-center mb-8 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
        Technologies & Outils
      </h1>

      <div class="max-w-4xl mx-auto w-full">
        <!-- Conteneur des bulles technologiques flottantes -->
        <div class="skill-container relative h-[600px] w-full rounded-xl p-4 mb-12 overflow-hidden md:overflow-visible">
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
              $x = rand(10, 90);
              $y = rand(10, 80);
              $overlap = checkOverlap($x, $y, $radius, $positions);
              $attempts++;
            } while ($overlap && $attempts < $config['maxAttempts']);

            if (!$overlap || $attempts < $config['maxAttempts']) {
              $positions[] = ['x' => $x, 'y' => $y, 'radius' => $radius];
              $iconPath = in_array($file, $nonClickableFiles1) ? 'assets/icons/techno-autre/language/' : 'assets/icons/techno-autre/outil/';
              generateTechBubble($file, $fileName, $size, $x, $y, $delay, false, $iconPath);
            }
          }

          // Génération des bulles cliquables
          foreach ($clickableFiles as $file) {
            $fileName = pathinfo($file, PATHINFO_FILENAME);
            $size = $config['sizes'][array_rand($config['sizes'])];
            $radius = $size / 2;
            $delay = $config['delays'][array_rand($config['delays'])];
            $attempts = 0;

            do {
              $x = rand(10, 90);
              $y = rand(10, 90);
              $overlap = checkOverlap($x, $y, $radius, $positions);
              $attempts++;
            } while ($overlap && $attempts < $config['maxAttempts']);

            if (!$overlap || $attempts < $config['maxAttempts']) {
              $positions[] = ['x' => $x, 'y' => $y, 'radius' => $radius];
              generateTechBubble($file, $fileName, $size, $x, $y, $delay, true);
            }
          }

          // Affichage d'erreur si placement impossible
          if ($attempts >= $config['maxAttempts']) {
            echo '<p class="text-red-500">Erreur : Impossible de placer les bulles sans chevauchement.</p>';
          }
          ?>
        </div>
      </div>
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
                echo "<img src='assets/icons/techno-autre/language/$file' alt='$fileName' class='w-5 h-5'>";
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
                echo "<img src='assets/icons/techno-autre/outil/$file' alt='$fileName' class='w-5 h-5'>";
                echo "<span class='text-gray-300'>$fileName</span>";
                echo "</div>";
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- ========================================
         SECTION CONTACT
    ======================================== -->
    <section id="contact" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">
      <div class="">
        <h1 class="text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
          Contact
        </h1>

        <!-- Informations de contact direct -->
        <p class="text-gray-500">Envoyez-moi un mail :</p>
        <p class="text-white text-xl py-6">
          <a href="mailto:parizetm@free.fr" class="hover:text-orange-600 transition duration-300">
            parizetm@free.fr
          </a>
        </p>
        <p class="text-gray-500">Ou remplissez le formulaire ci-dessous :</p>

        <!-- Formulaire de contact -->
        <form action="send_contact.php" method="post" class="max-w-3xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-2">
          <div class="mb-4">
            <input
              type="text"
              id="name"
              name="name"
              class="mt-1 block w-full p-2.5 bg-black/10 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 focus:ring-opacity-50 focus:border-opacity-50 sm:text-sm"
              required
              placeholder="Votre nom"
              maxlength="255" />
          </div>
          <div class="mb-4">
            <input
              type="email"
              id="email"
              name="email"
              class="mt-1 block w-full p-2.5 bg-black/10 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
              required
              placeholder="Votre adresse e-mail"
              maxlength="255" />
          </div>
          <div class="mb-4">
            <input
              type="text"
              id="sujet"
              name="sujet"
              class="mt-1 block w-full p-2.5 bg-black/10 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
              required
              placeholder="Sujet"
              maxlength="255" />
          </div>
          <div class="mb-4">
            <textarea
              id="message"
              name="message"
              rows="4"
              class="mt-1 block w-full p-2.5 bg-black/10 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
              required
              placeholder="Votre message..."></textarea>
          </div>
          <div class="flex items-center justify-center">
            <button
              type="submit"
              class="bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400 hover:cursor-pointer text-white">
              Envoyer
            </button>
          </div>
        </form>
      </div>
    </section>
  </div>


  <!-- ========================================
       SIDEBAR DE NAVIGATION
  ======================================== -->
  <div class="text-gray-300 col-4 hidden md:block border-l-2 border-stone-700 h-[70vh] sticky top-30 p-6 pr-0">
    <div class="sticky top-50 font-bold">
      <!-- Menu de navigation principal -->
      <ul>
        <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
          <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
          <a href="#about" class="nav-link1 whitespace-nowrap">À propos</a>
        </li>
        <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
          <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
          <a href="#parcours" class="nav-link1 whitespace-nowrap">Mon parcours</a>
        </li>
        <li class="flex flex-col opacity-50 hover:opacity-100 group" id="parent_li">
          <div class="flex items-center gap-4">
            <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
            <a href="#experience" class="whitespace-nowrap">Mon expérience</a>
          </div>
          <!-- Sous-menu -->
          <ul class="ml-8 font-normal">
            <li class="flex items-center gap-2 opacity-50 hover:opacity-100 group">
              <div class="h-1 w-6 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-8 mr-2"></div>
              <a href="#experience_professionnelle" class="nav-link-2 whitespace-nowrap">professionnelle</a>
            </li>
            <li class="flex items-center gap-2 opacity-50 hover:opacity-100 group">
              <div class="h-1 w-6 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-8 mr-2"></div>
              <a href="#experience_etudiante" class="nav-link-2 whitespace-nowrap">Étudiante</a>
            </li>
          </ul>
        </li>
        <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
          <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
          <a href="#competences" class="nav-link1">Technologies & Outils</a>
        </li>
        <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
          <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
          <a href="#contact" class="nav-link1">Contact</a>
        </li>
      </ul>

      <!-- Liens sociaux -->
      <div class="flex items-center mt-4 gap-2">
        <a href="https://github.com/ParizetM" target="_blank">
          <img src="assets/icons/github.svg" alt="GitHub" class="w-6 h-6 mt-4 transition duration-300 opacity-50 hover:opacity-100" />
        </a>
        <a href="https://www.linkedin.com/in/martin-parizet/" target="_blank">
          <img src="assets/icons/linkedin.svg" alt="LinkedIn" class="w-10 h-10 mt-4 transition duration-300 opacity-50 hover:opacity-100" />
        </a>
      </div>

      <!-- Informations de contact -->
      <div class="flex flex-col gap-2 mt-4 text-orange-600">
        <a href="mailto:parizetm@free.fr" class="opacity-50 hover:opacity-100">parizetm@free.fr</a>
        <a href="tel:+33651051650" class="opacity-50 hover:opacity-100">+33 (0)6 51 05 16 50</a>
      </div>
    </div>
  </div>
</div>