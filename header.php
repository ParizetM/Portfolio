

<header id="header" class="flex justify-between items-center p-2 bg-stone-700 shadow-lg sticky top-0 z-50 transition-transform duration-500">
    <div class="flex items-center gap-6">
        <a href="https://agfagoofay.fr">
            <img src="assets/icons/arrow_back.svg" alt="" />
        </a>
        <a
            href="index.php"
            class="flex items-center gap-6 hover:scale-105 transform hover:shadow-lg hover:bg-stone-800 p-2 rounded-full transition duration-300">
            <img
                src="assets/icons/Avatar-rounded.svg"
                alt="Avatar"
                class=" w-10 h-10" />
            <p class="text-white text-2xl font-bold">Martin Parizet</p>
        </a>
    </div>
    <nav class="flex items-center">
        <a
            href="index.php"
            class="text-gray-400 ml-4 hover:text-white transition duration-300">Accueil</a>
        <a
            href="contact.html"
            class="text-gray-400 ml-4 hover:text-white transition duration-300">Contact</a>
        <a
            href="CV.php"
            class="text-gray-400 ml-4 hover:text-white transition duration-300">CV</a>
        <div class="ml-4"></div>
    </nav>
</header>
<script>
    let timeout;
    const header = document.getElementById('header');

    function hideHeader() {
        header.classList.add('-translate-y-full');
        clearTimeout(timeout);
    }

    function showHeader() {
        header.classList.remove('-translate-y-full');
        clearTimeout(timeout);
        if (window.scrollY !== 0) {
            timeout = setTimeout(hideHeader, 2000); // Disappears after 2 seconds of inactivity
        }
    }

    // Show the header when the mouse is at the top of the screen or the page is at the top
    document.addEventListener('mousemove', (event) => {
        if (event.clientY < 50) { // If the mouse is within 50 pixels of the top of the screen
            showHeader();
        }
    });

    // Show the header when the page is scrolled to the top
    window.addEventListener('scroll', () => {
        if (window.scrollY <=2) { // If the page is scrolled to the top
            showHeader();
        } else {
            hideHeader(); // Hide the header when scrolling down
        }
    });

    // Start the initial timer
    // timeout = setTimeout(hideHeader, 2000);
</script>
