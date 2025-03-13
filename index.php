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
      <section id="about" class="flex flex-col items-center justify-center py-8 antialiased md:py-16">
        <div class="text-center">
          <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:text-5xl xl:text-6xl">
            Martin Parizet
          </h1>
          <p class="max-w-2xl mx-auto text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">
            PORTFOLIO 2025 - développeur
          </p>
          <p class="max-w-2xl mx-auto text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-6">
            Développeur web, je crée des sites et applications web. Actuellement en BTS SIO SLAM à l'IIA Saint-Nazaire, je cherche à améliorer mes compétences et à participer à des projets intéressants. </p>
          <a href="#" class="bg-gradient-to-r from-orange-600 to-orange-600 p-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400">
            Contactez-moi
          </a>
        </div>
      </section>
      <section id="experience" class="flex flex-col items-center justify-center py-8 antialiased md:py-16">
        <div class="text-center">
          <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:text-5xl xl:text-6xl">
            Martin Parizet
          </h1>
          <p class="max-w-2xl mx-auto text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">
            PORTFOLIO 2025 - développeur
          </p>
          <p class="max-w-2xl mx-auto text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-6">
            Développeur web, je crée des sites et applications simples. Actuellement en BTS SIO SLAM à l'IIA Saint-Nazaire, je cherche à améliorer mes compétences et à participer à des projets intéressants. </p>
          <a href="#" class="bg-gradient-to-r from-orange-600 to-yellow-600 p-4 rounded-full transition duration-300 hover:shadow-lg">
            Contactez-moi
          </a>
        </div>
      </section>
        <section id="contact" class="flex flex-col items-center justify-center py-8 antialiased md:py-16">
          <div class="text-center">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:text-5xl xl:text-6xl">
              Contactez-moi
            </h1>
            <form action="send_contact.php" method="post" class="max-w-2xl mx-auto text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl p-6">
              <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-300">Nom</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full p-2.5 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required>
              </div>
              <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full p-2.5 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required>
              </div>
              <div class="mb-4">
                <label for="sujet" class="block text-sm font-medium text-gray-300">Sujet</label>
                <input id="sujet" name="sujet" rows="4" class="mt-1 block w-full p-2.5 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required>
              </div>
              <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-300">Message</label>
                <textarea id="message" name="message" rows="4" class="mt-1 block w-full p-2.5 bg-gray-700 border border-gray-600 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" required></textarea>
              </div>
              <button type="submit" href="#" class="bg-gradient-to-r from-orange-600 to-orange-600 p-4 rounded-full transition duration-300 hover:shadow-lg hover:to-yellow-400 hover:cursor-pointer text-white">
            Envoyer
          </button>
            </form>
          </div>
        </section>
    </div>
    <div class="text-gray-300 col-4 hidden md:block">
      <div class="sticky top-50 font-bold">
        <ul>
          <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
            <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
            <a href="#about" class="nav-link">À propos</a>
          </li>
          <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
            <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
            <a href="#experience" class="nav-link">Mon expérience</a>
          </li>
          <li class="flex items-center gap-4 opacity-50 hover:opacity-100 group">
            <div class="h-1 w-12 bg-gradient-to-r from-orange-600 from-30% to-yellow-400 to-60% rounded-lg group-hover:w-20"></div>
            <a href="#contact" class="nav-link">Contact</a>
          </li>
        </ul>
        <div class="flex items-center mt-4 gap-2">
          <a href="https://github.com/ParizetM" target="_blank" >
            <img src="assets/icons/github.svg" alt="GitHub" class="w-6 h-6 mt-4 transition duration-300 opacity-50 hover:opacity-100" />
          </a>
          <a href="https://www.linkedin.com/in/martin-parizet/" target="_blank">
            <img src="assets/icons/linkedin.svg"  alt="LinkedIn" class="w-10 h-10 mt-4 transition duration-300 opacity-50 hover:opacity-100" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php 
  include 'footer.php' ?>
</body>
<script src="assets/js/scripts.js"></script>

</html>