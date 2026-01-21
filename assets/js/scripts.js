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
                            let div = parentLi.querySelector("div");
                            if (div) {
                                div.classList.remove("w-20", "xl:w-24", "2xl:w-28");
                            }
                        }
                        if (link.getAttribute("href").includes(id)) {
                            if (parentLi) {
                                parentLi.classList.add("opacity-100");
                                let div = parentLi.querySelector("div");
                                if (div) {
                                    div.classList.add("w-20", "xl:w-24", "2xl:w-28");
                                }
                            }
                        }
                    });

                    // Gestion des navLinks2
                    upperLi.classList.remove("opacity-100");
                    let upperDiv = upperLi.querySelector("div")?.querySelector("div");
                    if (upperDiv) {
                        upperDiv.classList.remove("w-20", "xl:w-24", "2xl:w-28");
                    }
                    navLinks2.forEach((link) => {
                        let parentLi = link.closest("li");
                    
                        if (link.getAttribute("href").includes(id)) {
                            if (parentLi) {
                                parentLi.classList.add("opacity-100");
                                let div = parentLi.querySelector("div");
                                if (div) {
                                    div.classList.add("w-8", "xl:w-10", "2xl:w-12");
                                }
                            }
                    
                            // Gestion du li au-dessus du ul
                            if (upperLi && upperLi.contains(parentLi)) {
                                upperLi.classList.add("opacity-100");
                                let upperDiv = upperLi.querySelector("div")?.querySelector("div");
                                if (upperDiv) {
                                    upperDiv.classList.add("w-20", "xl:w-24", "2xl:w-28");
                                }
                            }
                        } else if (parentLi) {
                            parentLi.classList.remove("opacity-100");
                            let div = parentLi.querySelector("div");
                            if (div) {
                                div.classList.remove("w-8", "xl:w-10", "2xl:w-12");
                            }
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

    // Gestion des filtres sticky
   
});
