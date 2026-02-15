<!-- Cercles décoratifs d'arrière-plan -->
<div class="circle top-20 left-10 bg-orange-600/20"></div>
<div class="circle top-160 right-0 bg-yellow-400/20"></div>
<div class="circle top-160 right-0 bg-yellow-400/20"></div>
<div class="circle top-340 right-120 bg-yellow-400/20"></div>
<div class="circle top-510 right-50 bg-orange-600/20"></div>
<div class="circle top-640 right-160 bg-yellow-400/20"></div>
<div class="circle top-780 right-100 bg-orange-600/20"></div>
<div class="circle top-880 right-160 bg-orange-600/20"></div>
<div class="circle top-1085 right-270 bg-orange-600/20"></div>
<div class="circle top-1020 right-50 bg-orange-600/20"></div>
<script src="assets/js/scripts.js"></script>




<!-- Carré effet glass simple -->

<!-- Layout principal avec grille responsive -->
<div class="grid grid-cols-1 md:grid-cols-4 md:grid">
  <!-- Contenu principal -->
  <div class="col-span-3 text-gray-300">



    <!-- ========================================
         SECTION À PROPOS
    ======================================== -->
    <section id="about" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section mt-16">
      <div class="text-center pl-0 md:pl-24">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
          Martin Parizet
        </h1>
        <?php
        $birth = new DateTime('2005-08-26');
        $now = new DateTime();
        $age = $now->diff($birth)->y;
        ?>
        <p class="max-w-2xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl ">
            PORTFOLIO <?php echo date('Y'); ?> - développeur - <?php echo $age; ?> ans -
        <a
            href="https://www.google.com/maps/search/?api=1&query=Gu%C3%A9rande+France"
            onclick="openMap(event)"
            target="_blank"
            rel="noopener noreferrer"
            class="text-orange-500 hover:underline"
            aria-label="Ouvrir la carte de Guérande"
            >
              Guérande (44)
            </a>

            <script>
            function openMap(e) {
              var query = encodeURIComponent('Guérande France');
              var ua = navigator.userAgent || navigator.vendor || window.opera;
              var url;

              // iOS -> Apple Maps
              if (/iPad|iPhone|iPod/.test(ua) && !window.MSStream) {
              url = 'maps://?q=' + query;
              }
              // Android -> geo: or Google Maps app
              else if (/Android/.test(ua)) {
              url = 'geo:0,0?q=' + query;
              }
              // Desktop / fallback -> Google Maps web
              else {
              url = 'https://www.google.com/maps/search/?api=1&query=' + query;
              }

              // Try to open the URL (apps will handle their schemes); fallback to href if blocked
              try {
              window.open(url, '_blank');
              } catch (err) {
              // fallback to the original href
              window.open('https://www.google.com/maps/search/?api=1&query=' + query, '_blank');
              }
              e.preventDefault();
            }
            </script>
        </p>
        
        <p class="max-w-2xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-6">
          Développeur passionné, je conçois des expériences web et des applications élégantes et performantes. Actuellement en Licence Informatique (développement) à l'IIA Saint-Nazaire.
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



      <!-- Alternance Atraga -->
      <div class="ml-5 w-full md:w-auto">
        <div class="p-2 border-r-2 border-dashed text-right float-right bg-stone-600/50 rounded-l-lg w-full pr-5 md:pr-2">
          <p class="text-orange-500 text-sm md:text-base">Septembre 2025 - Actuellement</p>
          <h2 class="text-lg font-bold text-white md:text-xl">
            <span class="text-gray-300 text-base md:text-lg">ALTERNANCE</span><br>
            Astraga <span class="text-gray-300 text-sm md:text-base">La Baule</span>
          </h2>
          <p class="text-gray-400 text-sm md:text-base">Développement Symfony (agence spécialisée WordPress, mission Symfony)</p>
        </div>
      </div>
      <div class="p-2 justify-center items-center bg-stone-600/50 h-full rounded-r-lg hidden md:flex">
        <!-- Logo Atraga si disponible -->
        <svg viewBox="0 0 169 169" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-16 h-16 m-1">
          <title>Slice</title>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <path d="M84.29,168.58 C37.81,168.58 0,130.77 0,84.29 C0,37.81 37.81,0 84.29,0 C130.77,0 168.58,37.81 168.58,84.29 C168.58,130.77 130.77,168.58 84.29,168.58 Z M84.29,14 C45.53,14 14,45.53 14,84.29 C14,123.05 45.53,154.58 84.29,154.58 C123.05,154.58 154.58,123.05 154.58,84.29 C154.58,45.53 123.05,14 84.29,14 Z" id="Shape" fill="#6C63FC" fill-rule="nonzero"></path>
            <circle id="Oval" fill="#6C63FC" fill-rule="nonzero" cx="84.29" cy="97.68" r="7.61"></circle>
            <polygon id="Path" fill="#6C63FC" fill-rule="nonzero" points="71.5 90.05 84.29 55.17 97.07 90.05 102.45 104.87 107.11 117.77 123.48 117.77 91.82 34.14 76.76 34.14 45.1 117.77 61.47 117.77 66.13 104.87"></polygon>
          </g>
        </svg>
      </div>
      <div class="w-0"></div>


      <!-- Licence Informatique (alignée à droite comme Pixelcréation) -->
      <div class="w-0"></div>
      <div class="p-2 justify-center items-center bg-stone-600/50 h-full rounded-l-lg hidden md:flex">
        <img src="assets/icons/logo-iia-200x200.png" alt="Logo IIA" class="w-15 h-15 m-1 rounded-full md:w-20 md:h-20 sm:w-12 sm:h-12">
      </div>
      <div class="mr-5 w-full md:w-auto">
        <div class="block p-2 border-l-2 border-dashed bg-stone-600/50 mr-6 rounded-r-lg w-full pl-5 md:pl-2">
          <p class="text-orange-500 text-sm md:text-base">Dès septembre 2025</p>
          <h2 class="text-lg font-bold text-white md:text-xl">
            <span class="text-gray-300 text-base md:text-lg">FORMATION</span><br>
            Licence Informatique option Développement <span class="text-gray-300 text-sm md:text-base">IIA Saint-Nazaire</span>
          </h2>
          <p class="text-gray-400 text-sm md:text-base">Développement web et logiciel, approfondissement des compétences techniques</p>
        </div>
      </div>

      <!-- Alternance Montaza -->
      <div class="ml-5 w-full md:w-auto">
        <div class="p-2 border-r-2 border-dashed text-right float-right bg-stone-600/50 rounded-l-lg w-full pr-5 md:pr-2">
          <p class="text-orange-500 text-sm md:text-base">Septembre 2024 - Août 2025</p>
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
    <?php include 'section-technos.php'; ?>



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

        <?php
        // Récupération des données du formulaire en cas d'erreur
        $formData = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : ['name' => '', 'email' => '', 'sujet' => '', 'message' => ''];
        unset($_SESSION['form_data']);
        ?>

        <!-- Formulaire de contact -->
        <form action="send_contact.php" method="post" class="max-w-3xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-2">
          <div class="mb-4">
            <input
              type="text"
              id="name"
              name="name"
              value="<?php echo htmlspecialchars($formData['name']); ?>"
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
              value="<?php echo htmlspecialchars($formData['email']); ?>"
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
              value="<?php echo htmlspecialchars($formData['sujet']); ?>"
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
              placeholder="Votre message..."><?php echo htmlspecialchars($formData['message']); ?></textarea>
          </div>
          <?php
        // Affichage des messages de succès
        if (isset($_SESSION['contact_success'])) {
          echo '<div class="bg-green-500/20 border border-green-500 text-green-200 px-4 py-3 rounded-lg mb-4">';
          echo '<p>' . htmlspecialchars($_SESSION['contact_success']) . '</p>';
          echo '</div>';
          unset($_SESSION['contact_success']);
        }

        // Affichage des erreurs
        if (isset($_SESSION['contact_errors'])) {
          echo '<div class="bg-red-500/20 border border-red-500 text-red-200 px-4 py-3 rounded-lg mb-4">';
          echo '<ul class="list-disc list-inside">';
          foreach ($_SESSION['contact_errors'] as $error) {
            echo '<li>' . htmlspecialchars($error) . '</li>';
          }
          echo '</ul>';
          echo '</div>';
          unset($_SESSION['contact_errors']);
        }
        ?>
          <div class="flex items-center justify-center">
            
            <div onmousemove="followMouse(this, event)" onmouseleave="resetPosition(this)">
              <button
                type="submit"
                class="bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400 hover:cursor-pointer text-white">
                Envoyer
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>


  <!-- ========================================
       SIDEBAR DE NAVIGATION
  ======================================== -->
  <div class="text-gray-300 col-4 hidden md:block border-l-2 border-stone-700 h-[70vh] sticky top-30 p-6 pr-0 xl:pl-10 xl:pr-4">
    <div class="sticky top-50 font-bold text-base xl:text-lg 2xl:text-xl">
      <!-- Menu de navigation principal -->
      <ul class="nav-menu-list space-y-1 xl:space-y-1.5">
        <li class="nav-item flex items-center gap-4 xl:gap-6 opacity-50 hover:opacity-100 group transition-all duration-300">
          <div class="h-1 xl:h-1.5 w-12 xl:w-16 2xl:w-20 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20 xl:group-hover:w-24 2xl:group-hover:w-28 transition-all duration-300"></div>
          <a href="#about" class="nav-link1 whitespace-nowrap">À propos</a>
        </li>
        <li class="nav-item flex items-center gap-4 xl:gap-6 opacity-50 hover:opacity-100 group transition-all duration-300">
          <div class="h-1 xl:h-1.5 w-12 xl:w-16 2xl:w-20 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20 xl:group-hover:w-24 2xl:group-hover:w-28 transition-all duration-300"></div>
          <a href="#parcours" class="nav-link1 whitespace-nowrap">Mon parcours</a>
        </li>
        <li class="nav-item flex flex-col opacity-50 hover:opacity-100 group transition-all duration-300" id="parent_li">
          <div class="flex items-center gap-4 xl:gap-6">
            <div class="h-1 xl:h-1.5 w-12 xl:w-16 2xl:w-20 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20 xl:group-hover:w-24 2xl:group-hover:w-28 transition-all duration-300"></div>
            <a href="#experience" class="whitespace-nowrap">Mon expérience</a>
          </div>
          <!-- Sous-menu -->
          <ul class="ml-8 xl:ml-12 font-normal space-y-1 xl:space-y-1.5 mt-1">
            <li class="flex items-center gap-2 xl:gap-3 opacity-50 hover:opacity-100 group">
              <div class="h-1 xl:h-1.5 w-6 xl:w-8 2xl:w-10 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-8 xl:group-hover:w-10 2xl:group-hover:w-12 mr-2 transition-all duration-300"></div>
              <a href="#experience_professionnelle" class="nav-link-2 whitespace-nowrap">professionnelle</a>
            </li>
            <li class="flex items-center gap-2 xl:gap-3 opacity-50 hover:opacity-100 group">
              <div class="h-1 xl:h-1.5 w-6 xl:w-8 2xl:w-10 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-8 xl:group-hover:w-10 2xl:group-hover:w-12 mr-2 transition-all duration-300"></div>
              <a href="#experience_etudiante" class="nav-link-2 whitespace-nowrap">Étudiante</a>
            </li>
          </ul>
        </li>
        <li class="nav-item flex items-center gap-4 xl:gap-6 opacity-50 hover:opacity-100 group transition-all duration-300">
          <div class="h-1 xl:h-1.5 w-12 xl:w-16 2xl:w-20 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20 xl:group-hover:w-24 2xl:group-hover:w-28 transition-all duration-300"></div>
          <a href="#competences" class="nav-link1">Ma Toolbox</a>
        </li>
        <li class="nav-item flex items-center gap-4 xl:gap-6 opacity-50 hover:opacity-100 group transition-all duration-300">
          <div class="h-1 xl:h-1.5 w-12 xl:w-16 2xl:w-20 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20 xl:group-hover:w-24 2xl:group-hover:w-28 transition-all duration-300"></div>
          <a href="#contact" class="nav-link1">Contact</a>
        </li>
      </ul>
      
      <style>
        /* Effet de compactage et écartement au hover */
        .nav-menu-list:has(.nav-item:hover) .nav-item:not(:hover) {
          margin-top: 0.15rem;
          margin-bottom: 0.15rem;
        }
        
        .nav-menu-list .nav-item:hover {
          margin-top: 1rem;
          margin-bottom: 1rem;
        }
        
        @media (min-width: 1280px) {
          .nav-menu-list:has(.nav-item:hover) .nav-item:not(:hover) {
            margin-top: 0.2rem;
            margin-bottom: 0.2rem;
          }
          
          .nav-menu-list .nav-item:hover {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
          }
        }
      </style>

      <!-- Liens sociaux -->
      <div class="flex items-center mt-6 xl:mt-8 gap-3 xl:gap-4">
        <a href="https://github.com/ParizetM" target="_blank">
          <img src="assets/icons/github.svg" alt="GitHub" class="w-6 h-6 xl:w-8 xl:h-8 2xl:w-10 2xl:h-10 mt-4 transition duration-300 opacity-50 hover:opacity-100 hover:scale-110" />
        </a>
        <a href="https://www.linkedin.com/in/martin-parizet/" target="_blank">
          <img src="assets/icons/linkedin.svg" alt="LinkedIn" class="w-10 h-10 xl:w-12 xl:h-12 2xl:w-14 2xl:h-14 mt-4 transition duration-300 opacity-50 hover:opacity-100 hover:scale-110" />
        </a>
      </div>

      <!-- Informations de contact -->
      <div class="flex flex-col gap-2 xl:gap-3 mt-6 xl:mt-8 text-orange-600 text-sm xl:text-base 2xl:text-lg">
        <a href="mailto:parizetm@free.fr" class="opacity-50 hover:opacity-100 transition-opacity duration-300">parizetm@free.fr</a>
        <a href="tel:+33651051650" class="opacity-50 hover:opacity-100 transition-opacity duration-300">+33 (0)6 51 05 16 50</a>
      </div>
    </div>
  </div>
</div>