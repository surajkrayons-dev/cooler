// ============================================================
// CollarCraft Industries — landing page interactions
// Kept deliberately minimal: navbar state, one scroll-reveal
// pass, and client-side form validation before PHP handles it.
// ============================================================

document.addEventListener('DOMContentLoaded', function () {

  // ---- Navbar shadow on scroll ----
  var navbar = document.getElementById('ccNavbar');
  function updateNavbar() {
    if (window.scrollY > 12) {
      navbar.classList.add('cc-scrolled');
    } else {
      navbar.classList.remove('cc-scrolled');
    }
  }
  updateNavbar();
  window.addEventListener('scroll', updateNavbar, { passive: true });

  // ---- Close mobile menu after a nav link is tapped ----
  var navLinks = document.querySelectorAll('#ccNav .nav-link');
  var navCollapseEl = document.getElementById('ccNav');
  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      if (navCollapseEl.classList.contains('show') && window.bootstrap) {
        var collapse = window.bootstrap.Collapse.getOrCreateInstance(navCollapseEl);
        collapse.hide();
      }
    });
  });

  // ---- One orchestrated scroll-reveal pass (respects reduced motion) ----
  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var revealTargets = document.querySelectorAll(
    '.cc-product-card, .cc-process-step, .cc-feature, .cc-testimonial'
  );

  if (!prefersReducedMotion && 'IntersectionObserver' in window) {
    revealTargets.forEach(function (el) {
      el.style.opacity = '0';
      el.style.transform = 'translateY(16px)';
      el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    revealTargets.forEach(function (el) { observer.observe(el); });
  }

  // ---- Bulk-quote form: client-side check before hitting PHP ----
  var form = document.querySelector('.cc-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      if (!form.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      }
      form.classList.add('was-validated');
    });
  }

  // ---- Auto-dismiss the success/error alert after a few seconds ----
  var alertBox = document.querySelector('.cc-alert');
  if (alertBox) {
    setTimeout(function () {
      alertBox.style.transition = 'opacity 0.4s ease';
      alertBox.style.opacity = '0';
      setTimeout(function () { alertBox.remove(); }, 400);
    }, 6000);
  }

});
