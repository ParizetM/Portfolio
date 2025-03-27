<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Martin Parizet</title>
  <link rel="icon" href="assets/icons/Avatar-rounded.svg" type="image/x-icon" />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Inter:wght@400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/outpouts.css" />
</head>

<body class="bg-stone-800 text-gray-300 ">
  <?php include 'header.php' ?>
  <div class="circle top-20 left-10 bg-orange-600/20"></div>
  <div class="circle top-160 right-0 bg-yellow-400/20"></div>
  <div class="grid grid-cols-1 md:grid-cols-4 md:grid">



    <div class="col-span-3 text-gray-300 ">
      <section id="about" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">
        <div class="text-center">
          <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
            Martin Parizet
          </h1>
          <p class="max-w-2xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">
            PORTFOLIO 2025 - développeur
          </p>
          <p class="max-w-2xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-6">
            Développeur web, je crée des sites et applications web. Actuellement en BTS SIO SLAM à l'IIA Saint-Nazaire, je cherche à améliorer mes compétences et à participer à des projets intéressants. </p>
          <a href="#contact" class="bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400">
            Contactez-moi
          </a>
        </div>
      </section>

      <!--
########     ###    ########   ######   #######  ##     ## ########   ######  
##     ##   ## ##   ##     ## ##    ## ##     ## ##     ## ##     ## ##    ## 
##     ##  ##   ##  ##     ## ##       ##     ## ##     ## ##     ## ##       
########  ##     ## ########  ##       ##     ## ##     ## ########   ######  
##        ######### ##   ##   ##       ##     ## ##     ## ##   ##         ## 
##        ##     ## ##    ##  ##    ## ##     ## ##     ## ##    ##  ##    ## 
##        ##     ## ##     ##  ######   #######   #######  ##     ##  ######  
-->




      <section id="parcours" class="flex flex-wrap md:grid grid-cols-[3fr_1fr_3fr] gap-y-4 items-center justify-center py-8 antialiased md:py-16 section">
        <h1 class="text-center mb-8 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl col-span-3 w-full">
          Mon parcours
        </h1>
        <div class="ml-5 w-full md:w-auto">
          <div class="p-2 border-r-2 border-dashed text-right float-right bg-stone-600/50 rounded-l-lg w-full pr-5 md:pr-2">
            <p class="text-orange-500 text-sm md:text-base">Septembre 2024 - Actuellement</p>
            <h2 class="text-lg font-bold text-white md:text-xl">
              <span class="text-gray-300 text-base md:text-lg">ALTERNANCE </span> <br>
              Atlantis Montaza <span class="text-gray-300 text-sm md:text-base">Trignac </span>
            </h2>
            <p class="text-gray-400 text-sm md:text-base">Dev Web PGI interne</p>
          </div>
        </div>
        <div class="p-2 justify-center items-center bg-stone-600/50 h-full rounded-r-lg hidden md:flex">
          <img src="assets/icons/montaza.svg" alt="" class="w-15 h-15 m-1">
        </div>
        <div class="w-0"></div>
        <div class="w-0"></div>

        <div class=" p-2 justify-center items-center bg-stone-600/50 h-full rounded-l-lg hidden md:flex">
          <img src="assets/icons/fireverif.svg" alt="" class="w-15 h-15 m-1 ml-6">
        </div>
        <div class="mr-5 w-full md:w-auto">
          <div class="block p-2 border-l-2 border-dashed bg-stone-600/50 mr-6 rounded-r-lg w-full pl-5 md:pl-2">
            <p class="text-orange-500 text-sm md:text-base">10/06/2024 - 19/07/2024</p>
            <h2 class="text-lg font-bold text-white md:text-xl">
              <span class="text-gray-300 text-base md:text-lg">STAGE </span> <br>
              PIXELCRÉATION <span class="text-gray-300 text-sm md:text-base">Savenay </span>
            </h2>
            <p class="text-gray-400 text-sm md:text-base">Dev Web - application pompiers pour le sdis 44 FIREVERIF</p>
          </div>
        </div>

        <div title="BTS Service Informatiques aux Organisations option Solutions Logicielles des Applications Métiers" class="ml-5 w-full md:w-auto">
          <div class="p-2 border-r-2 border-dashed text-right float-right bg-stone-600/50 ml-6 rounded-l-lg w-full pr-5 md:pr-2">
            <p class="text-orange-500 text-sm md:text-base">Septembre 2023 - Actuellement</p>
            <h2 class="text-lg font-bold text-white md:text-xl">
              <span class="text-gray-300 text-base md:text-lg">FORMATION </span> <br>
              BTS SIO option SLAM <span class="text-gray-300 text-sm md:text-base"><br />Institut Informatique Appliquée<br />Saint-Nazaire </span>
            </h2>
            <p class="text-gray-400 text-sm md:text-base">Service Informatiques aux Organisations - Développement </p>
          </div>
        </div>
        <div class=" p-2 justify-center items-center bg-stone-600/50 h-full rounded-r-lg hidden md:flex" title="BTS Service Informatiques aux Organisations option Solutions Logicielles des Applications Métiers">
          <img src="assets/icons/logo-iia-200x200.png" alt="" class="w-15 h-15 m-1 rounded-full md:w-20 md:h-20 sm:w-12 sm:h-12 ">
        </div>
        <div></div>
        <div></div>

        <div class=" p-2 justify-center items-center bg-stone-600/50 h-full rounded-l-lg hidden md:flex">
          <img src="assets/icons/galilee.png" alt="" class="w-15 h-15 m-1 rounded-full md:w-20 md:h-20 sm:w-12 sm:h-12 ">
        </div>
        <div class="mr-5 w-full md:w-auto">

          <div class="block p-2 border-l-2 border-dashed bg-stone-600/50 mr-6 rounded-r-lg w-full pl-5 md:pl-2">
            <p class="text-orange-500 text-sm md:text-base">2023</p>
            <h2 class="text-lg font-bold text-white md:text-xl">
              <span class="text-gray-300 text-base md:text-lg">FORMATION </span> <br>
              Bac Général <span class="text-gray-300 text-sm md:text-base">Guérande </span>
            </h2>
            <p class="text-gray-400 text-sm md:text-base">Maths - Physique-Chimie - Science de l'ingénieur</p>
          </div>
        </div>
      </section>



      <!-- 
##     ##  #######  ##    ##      ######## ##      ## ########  ######## ########  #### ######## ##    ##  ######  ######## 
###   ### ##     ## ###   ##      ##        ##    ##  ##     ## ##       ##     ##  ##  ##       ###   ## ##    ## ##       
#### #### ##     ## ####  ##      ##         ##  ##   ##     ## ##       ##     ##  ##  ##       ####  ## ##       ##       
## ### ## ##     ## ## ## ##      ######      ####    ########  ######   ########   ##  ######   ## ## ## ##       ######   
##     ## ##     ## ##  ####      ##         ##  ##   ##        ##       ##   ##    ##  ##       ##  #### ##       ##       
##     ## ##     ## ##   ###      ##        ##    ##  ##        ##       ##    ##   ##  ##       ##   ### ##    ## ##       
##     ##  #######  ##    ##      ######## ##      ## ##        ######## ##     ## #### ######## ##    ##  ######  ######## 

 -->







      <section id="experience" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">
        <div class="section" id="experience_professionnelle">
          <h1 class="text-center mb-8 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl xl:text-6xl ">
            Mon expérience <br>
            <span class="text-orange-600 text-3xl md:text-4xl xl:text-5xl">Mes projets<br>
              Professionnels</span>
          </h1>
          <div class="">
            <div class="mb-4 border-2 border-gray-500 rounded-lg p-6 max-w-2xl mx-auto ">
              <a class="flex items-center justify-between hover:shadow-lg rounded-xl p-2 hover:bg-stone-700/50 hover:cursor-pointer hover:scale-105" title="Afficher le projet" href="projets/index.php?projet=1">
                <h2 class="text-2xl font-bold text-white flex flex-wrap"><img src="assets/icons/montaza.svg" alt="" class="w-6 mr-2">DÉVELOPPEMENT <span class="whitespace-nowrap">&nbsp;D’UN ERP</span></h2>
                <img src="assets/icons/open_in_new.svg" alt="" class="w-6 h-6 fill-white">
              </a>
              <small class="text-orange-600 ml-2">Septembre 2024 - Actuellement</small>
              <p class="text-gray-400 ml-2">ATLANTIS MONTAZA - TRIGNAC</p>
              <p class="text-gray-400 ml-2">développer en autonomie : analyse des besoins, concevoir et implémenter</p>
              <div class="flex flex-wrap gap-4 mt-4">
                <?php
                $nom_techno = "PHP";
                include 'base.php';
                $nom_techno = "Laravel";
                include 'base.php';
                $nom_techno = "PostgreSQL";
                include 'base.php';
                $nom_techno = "JavaScript";
                include 'base.php';
                $nom_techno = "TailwindCSS";
                include 'base.php';
                ?>
              </div>
            </div>



            <div class="mb-4 border-2 border-gray-500 rounded-lg p-6 max-w-2xl mx-auto ">
              <a class="flex items-center justify-between hover:shadow-lg rounded-xl p-2 hover:bg-stone-700/50 hover:cursor-pointer hover:scale-105" title="Afficher le projet" href="projets/index.php?projet=2">
                <h2 class="text-2xl font-bold text-white flex flex-wrap"><img src="assets/icons/fireverif.svg" alt="" class="w-6 mr-2"><span class="whitespace-nowrap">APPLICATION WEB &nbsp;</span>FIREVERIF - STAGE</h2>
                <img src="assets/icons/open_in_new.svg" alt="" class="w-6 h-6 fill-white">
              </a>
              <small class="text-orange-600 ml-2">10 juin 2024 - 19 juillet 2024</small>
              <p class="text-gray-400 ml-2">PIXELCRÉATION - SAVENAY</p>
              <p class="text-gray-400 ml-2">Dévelloper en équipe : suivie d'un cahier des charges, Back-end</p>
              <div class="flex flex-wrap gap-4 mt-4">
                <?php
                $nom_techno = "PHP";
                include 'base.php';
                $nom_techno = "HTML";
                include 'base.php';
                $nom_techno = "JavaScript";
                include 'base.php';
                $nom_techno = "MySQL";
                include 'base.php';
                ?>
              </div>
            </div>
          </div>
        </div>


        <div>
          <h1 class="text-center mb-8 text-4xl font-extrabold leading-tight tracking-tight text-white md:text-5xl xl:text-6xl section" id="experience_etudiante">
            <br>
            <span class="text-orange-600 text-3xl md:text-4xl xl:text-5xl">Mes projets<br>
              Étudiants</span>
          </h1>
          <div class="mb-4 border-2 border-gray-500 rounded-lg p-6 max-w-2xl mx-auto ">
            <a class="flex items-center justify-between hover:shadow-lg rounded-xl p-2 hover:bg-stone-700/50 hover:cursor-pointer hover:scale-105" title="Afficher le projet" href="projets/index.php?projet=2">
              <h2 class="text-2xl font-bold text-white flex flex-wrap items-center "><img src="projets/Des-mineurs/medias/Des-mineurs.png" alt="helphub logo" class="w-6 mr-2"><span class="whitespace-nowrap">Jeu WEB Des Mineurs&nbsp;</span></h2>
              <img src="assets/icons/open_in_new.svg" alt="" class="w-6 h-6 fill-white">
            </a>
            <small class="text-orange-600 ml-2">Février 2024</small>
            <p class="text-gray-400 ml-2">Institut Informatique Appliquée - Saint-Nazaire</p>
            <p class="text-gray-400 ml-2">Dévelloper en équipe : imaginer un jeu simple, Back-end & Front-end</p>
            <div class="flex flex-wrap gap-4 mt-4">
              <?php
              $nom_techno = "PHP";
              include 'base.php';
              $nom_techno = "HTML";
              include 'base.php';
              $nom_techno = "CSS";
              include 'base.php';
              $nom_techno = "JavaScript";
              include 'base.php';
              $nom_techno = "MySQL";
              include 'base.php';
              ?>
            </div>
          </div>
          <div class="mb-4 border-2 border-gray-500 rounded-lg p-6 max-w-2xl mx-auto ">
            <a class="flex items-center justify-between hover:shadow-lg rounded-xl p-2 hover:bg-stone-700/50 hover:cursor-pointer hover:scale-105" title="Afficher le projet" href="projets/index.php?projet=2">
              <h2 class="text-2xl font-bold text-white flex flex-wrap items-center "><img src="projets/HelpHub/medias/helphub_logo_dark.svg" alt="helphub logo" class="w-6 mr-2"><span class="whitespace-nowrap">APPLICATION WEB Ticketing&nbsp;</span>HelpHub</h2>
              <img src="assets/icons/open_in_new.svg" alt="" class="w-6 h-6 fill-white">
            </a>
            <small class="text-orange-600 ml-2">Février 2024</small>
            <p class="text-gray-400 ml-2">Institut Informatique Appliquée - Saint-Nazaire</p>
            <p class="text-gray-400 ml-2">Dévelloper en équipe : suivie d'un cahier des charges, Back-end & Front-end</p>
            <div class="flex flex-wrap gap-4 mt-4">
              <?php
              $nom_techno = "PHP";
              include 'base.php';
              $nom_techno = "HTML";
              include 'base.php';
              $nom_techno = "CSS";
              include 'base.php';
              $nom_techno = "JavaScript";
              include 'base.php';
              $nom_techno = "MySQL";
              include 'base.php';
              ?>
            </div>
          </div>




        </div>

      </section>







      <!--
 ######   #######  ##    ## ########    ###     ######  ######## 
##    ## ##     ## ###   ##    ##      ## ##   ##    ##    ##    
##       ##     ## ####  ##    ##     ##   ##  ##          ##    
##       ##     ## ## ## ##    ##    ##     ## ##          ##    
##       ##     ## ##  ####    ##    ######### ##          ##    
##    ## ##     ## ##   ###    ##    ##     ## ##    ##    ##    
 ######   #######  ##    ##    ##    ##     ##  ######     ##     -->

      <section id="contact" class="flex flex-col items-center justify-center py-8 antialiased md:py-16 section">

        <div class="">
          <h1 class=" text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl xl:text-6xl">
            Contact
          </h1>
          <p class="text-gray-500">Envoyez-moi un mail : </p>
          <p class=" text-white text-xl py-6">
            <a href="mailto:parizetm@free.fr" class="hover:text-orange-600 transition duration-300">
              parizetm@free.fr
            </a>
          </p>
          <p class="text-gray-500">Ou remplissez le formulaire ci-dessous :</p>

          <form action="send_contact.php" method="post" class="max-w-3xl mx-auto text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-2">
            <div class="mb-4">
              <input type="text" id="name" name="name" class="mt-1 block w-full p-2.5 bg-black/10 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 focus:ring-opacity-50 focus:border-opacity-50 sm:text-sm" required placeholder="Votre nom" maxlength="255" />
            </div>
            <div class="mb-4">
              <input type="email" id="email" name="email" class="mt-1 block w-full p-2.5 bg-black/10 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required placeholder="Votre adresse e-mail" maxlength="255" />
            </div>
            <div class="mb-4">
              <input id="sujet" name="sujet" rows="4" class="mt-1 block w-full p-2.5 bg-black/10 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required placeholder="Sujet" maxlength="255" />
            </div>
            <div class="mb-4">
              <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-2.5 bg-black/10 border rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required placeholder="Votre message..."></textarea>
            </div>
            <div class="flex items-center justify-center">
              <button type="submit" href="#" class="bg-gradient-to-r from-orange-600 to-orange-600 py-2 px-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400 hover:cursor-pointer text-white">
                Envoyer
              </button>
            </div>
          </form>
        </div>
      </section>
    </div>



    <div class="text-gray-300 col-4 hidden md:block border-l-2 border-stone-700 h-[70vh] sticky top-30 p-6 pr-0">
      <div class="sticky top-50 font-bold">
        <ul>
          <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
            <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
            <a href="#about" class="nav-link1 whitespace-nowrap">À propos</a>
          </li>
          <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
            <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
            <a href="#parcours" class="nav-link1 whitespace-nowrap"> Mon parcours
            </a>
          </li>
          <li class="flex flex-col opacity-50 hover:opacity-100 group" id="parent_li">
            <div class="flex items-center gap-4">
              <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
              <a href="#experience" class=" whitespace-nowrap">Mon expérience</a>
            </div>
            <ul class="ml-8 font-normal">

              <li class="flex items-center gap-2 opacity-50 hover:opacity-100 group">
                <div class="h-1 w-6 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-8 mr-2"></div>
                <a href="#experience_professionnelle" class="nav-link-2 whitespace-nowrap">professionnelle
                </a>
              </li>
              <li class="flex items-center gap-2 opacity-50 hover:opacity-100 group">
                <div class="h-1 w-6 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-8 mr-2"></div>
                <a href="#experience_etudiante" class="nav-link-2 whitespace-nowrap">Étudiante
                </a>
              </li>

            </ul>
          </li>
          <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
            <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
            <a href="#contact" class="nav-link1 ">Contact</a>
          </li>
        </ul>
        <div class="flex items-center mt-4 gap-2">
          <a href="https://github.com/ParizetM" target="_blank">
            <img src="assets/icons/github.svg" alt="GitHub" class="w-6 h-6 mt-4 transition duration-300 opacity-50 hover:opacity-100" />
          </a>
          <a href="https://www.linkedin.com/in/martin-parizet/" target="_blank">
            <img src="assets/icons/linkedin.svg" alt="LinkedIn" class="w-10 h-10 mt-4 transition duration-300 opacity-50 hover:opacity-100" />
          </a>
        </div>
        <div class="flex flex-col gap-2 mt-4 text-orange-600">
          <a href="mailto:parizetm@free.fr" class="opacity-50 hover:opacity-100">parizetm@free.fr</a>
          <a href="tel:+33651051650" class="opacity-50 hover:opacity-100">+33 (0)6 51 05 16 50</a>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'footer.php' ?>
</body>
<script src="assets/js/scripts.js"></script>

</html>