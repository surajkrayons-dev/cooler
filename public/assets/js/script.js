document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('ccNavbar');

    if (navbar) {
        const updateNavbar = () => navbar.classList.toggle('cc-scrolled', window.scrollY > 12);
        updateNavbar();
        window.addEventListener('scroll', updateNavbar, { passive: true });
    }

    const navLinks = document.querySelectorAll('#ccNav .nav-link, #ccNav .cc-btn');
    const navCollapse = document.getElementById('ccNav');

    navLinks.forEach((link) => {
        link.addEventListener('click', () => {
            if (navCollapse && navCollapse.classList.contains('show') && window.bootstrap) {
                window.bootstrap.Collapse.getOrCreateInstance(navCollapse).hide();
            }
        });
    });

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const revealTargets = document.querySelectorAll(
        '.cc-product-card, .cc-industry, .cc-process-step, .cc-feature, .cc-quote-box, .cc-contact-points > div'
    );

    if (!reducedMotion && 'IntersectionObserver' in window) {
        revealTargets.forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(18px)';
            el.style.transition = `opacity .55s ease ${Math.min(index * 35, 220)}ms, transform .55s ease ${Math.min(index * 35, 220)}ms`;
        });

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                obs.unobserve(entry.target);
            });
        }, { threshold: 0.12 });

        revealTargets.forEach((el) => observer.observe(el));
    }

    const form = document.querySelector('.cc-form');
    if (form) {
        form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    }

    const alertBox = document.querySelector('.cc-alert');
    if (alertBox) {
        window.setTimeout(() => {
            alertBox.style.transition = 'opacity .35s ease, transform .35s ease';
            alertBox.style.opacity = '0';
            alertBox.style.transform = 'translateY(-6px)';
            window.setTimeout(() => alertBox.remove(), 350);
        }, 6500);
    }
});


/* =========================================================
   COLLARCRAFT GLOBAL MOTION ENGINE
   ========================================================= */

document.addEventListener("DOMContentLoaded", () => {

    /*
     * -------------------------------------------------------
     * Liquid atmosphere
     * -------------------------------------------------------
     */

    const atmosphere = document.createElement("div");

    atmosphere.className = "cc-liquid-atmosphere";

    atmosphere.innerHTML = `
        <div class="cc-liquid-blob"></div>
        <div class="cc-liquid-blob"></div>
        <div class="cc-liquid-blob"></div>
    `;

    document.body.prepend(atmosphere);


    /*
     * -------------------------------------------------------
     * Floating air particles
     * -------------------------------------------------------
     */

    const particleCount =
        window.innerWidth < 768 ? 5 : 9;

    for (let i = 0; i < particleCount; i++) {

        const particle =
            document.createElement("span");

        particle.className =
            "cc-air-particle";

        particle.style.left =
            `${Math.random() * 100}%`;

        particle.style.animationDuration =
            `${12 + Math.random() * 12}s`;

        particle.style.animationDelay =
            `${Math.random() * -15}s`;

        particle.style.opacity =
            `${0.15 + Math.random() * 0.35}`;

        document.body.appendChild(particle);
    }


    /*
     * -------------------------------------------------------
     * Scroll reveal
     * -------------------------------------------------------
     */

    const revealElements = document.querySelectorAll(`
        .cc-section-head,
        .cc-gallery-heading,
        .cc-product-card,
        .cc-industry,
        .cc-process-step,
        .cc-feature,
        .cc-quote-box,
        .cc-footer
    `);


    revealElements.forEach((element, index) => {

        element.classList.add(
            "cc-scroll-reveal"
        );

        /*
         * Cards get staggered animation
         */

        if (
            element.classList.contains("cc-product-card") ||
            element.classList.contains("cc-industry") ||
            element.classList.contains("cc-process-step") ||
            element.classList.contains("cc-feature")
        ) {

            element.style.transitionDelay =
                `${(index % 5) * 70}ms`;
        }

    });


    /*
     * -------------------------------------------------------
     * Intersection Observer
     * -------------------------------------------------------
     */

    const observer =
        new IntersectionObserver(
            (entries) => {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add(
                            "cc-visible"
                        );

                    }

                });

            },
            {
                threshold: 0.12,

                rootMargin:
                    "0px 0px -60px 0px"
            }
        );


    document
        .querySelectorAll(".cc-scroll-reveal")
        .forEach((element) => {

            observer.observe(element);

        });


    /*
     * -------------------------------------------------------
     * Gallery parallax
     * -------------------------------------------------------
     */

    const galleryImages =
        document.querySelectorAll(
            ".cc-gallery-item img"
        );


    let ticking = false;


    function updateParallax() {

        const scrollY =
            window.scrollY;

        galleryImages.forEach(
            (image, index) => {

                const speed =
                    index % 2 === 0
                        ? 0.018
                        : -0.012;

                const offset =
                    scrollY * speed;

                image.style.setProperty(
                    "--cc-scroll-offset",
                    `${offset}px`
                );

            }
        );

        ticking = false;
    }


    window.addEventListener(
        "scroll",
        () => {

            if (!ticking) {

                window.requestAnimationFrame(
                    updateParallax
                );

                ticking = true;

            }

        },
        {
            passive: true
        }
    );


    /*
     * -------------------------------------------------------
     * Smooth anchor navigation
     * -------------------------------------------------------
     */

    document
        .querySelectorAll('a[href^="#"]')
        .forEach((link) => {

            link.addEventListener(
                "click",
                function (event) {

                    const targetId =
                        this.getAttribute("href");

                    if (
                        !targetId ||
                        targetId === "#"
                    ) {
                        return;
                    }

                    const target =
                        document.querySelector(
                            targetId
                        );

                    if (!target) {
                        return;
                    }

                    event.preventDefault();

                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });

                }
            );

        });

});