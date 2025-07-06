document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".section");
    const navLinks = document.querySelectorAll(".nav-link1");
    const navLinks2 = document.querySelectorAll(".nav-link-2");
    const upperLi = document.querySelector("#parent_li");


    
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let id = entry.target.getAttribute("id");

                    // Gestion des navLinks
                    navLinks.forEach((link) => {
                        let parentLi = link.closest("li");
                        if (parentLi) {
                            parentLi.classList.remove("opacity-100");
                            parentLi.querySelector("div")?.classList.remove("w-20");
                        }
                        if (link.getAttribute("href").includes(id)) {
                            if (parentLi) {
                                parentLi.classList.add("opacity-100");
                                parentLi.querySelector("div")?.classList.add("w-20");
                            }
                        }
                    });

                    // Gestion des navLinks2
                    upperLi.classList.remove("opacity-100");
                    upperLi
                        .querySelector("div")
                        ?.querySelector("div")
                        ?.classList.remove("w-20");
                    navLinks2.forEach((link) => {
                        let parentLi = link.closest("li");
                    
                        if (link.getAttribute("href").includes(id)) {
                            if (parentLi) {
                                parentLi.classList.add("opacity-100");
                                parentLi.querySelector("div")?.classList.add("w-8");
                            }
                    
                            // Gestion du li au-dessus du ul
                            if (upperLi && upperLi.contains(parentLi)) {
                                upperLi.classList.add("opacity-100");
                                upperLi
                                    .querySelector("div")
                                    ?.querySelector("div")
                                    ?.classList.add("w-20");
                            }
                        } else if (parentLi) {
                            parentLi.classList.remove("opacity-100");
                            parentLi.querySelector("div")?.classList.remove("w-8");
                        }
                    });
                }
            });
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        }
    );

    sections.forEach((section) => {
        observer.observe(section);
    });
});
