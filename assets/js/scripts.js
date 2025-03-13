document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let id = entry.target.getAttribute("id");
                    navLinks.forEach((link) => {
                        const parentLi = link.parentElement;
                        parentLi.classList.remove("opacity-100");
                        parentLi.querySelector("div").classList.remove("w-20");
                        if (link.getAttribute("href").includes(id)) {
                            parentLi.classList.add("opacity-100");
                            parentLi.querySelector("div").classList.add("w-20");
                        }
                    });
                }
            });
        },
        {
            root: null, // viewport
            rootMargin: "0px",
            threshold: 0.5, // 50% visible to activate
        }
    );

    sections.forEach((section) => {
        observer.observe(section);
    });
});
