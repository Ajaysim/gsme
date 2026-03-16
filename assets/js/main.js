/* =============================================
   GSME ENTERPRISES - MAIN JAVASCRIPT (FIXED)
   ============================================= */

document.addEventListener('DOMContentLoaded', function () {

  /* ==========================================
     1. AOS INITIALIZATION
     ========================================== */
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 800,
      easing:   'ease-in-out',
      once:     true,
      offset:   80,
    });
  }

  /* ==========================================
     2. CACHE COMMON ELEMENTS
     ========================================== */
  const navbar      = document.getElementById('mainNavbar');
  const hamburger   = document.getElementById('hamburger');
  const navMenu     = document.getElementById('navMenu');
  const backToTop   = document.getElementById('backToTop');
  const contactForm = document.getElementById('contactForm');
  const preloader   = document.getElementById('preloader');
  const sections    = document.querySelectorAll('section[id]');
  const navLinks    = document.querySelectorAll('.nav-menu a');

  // ⭐ Collect all dropdown parent elements
  const dropdownParents = document.querySelectorAll('.has-mega-menu, .has-dropdown');

  // ⭐ Helper: Check if a link is a dropdown toggle
  function isDropdownToggle(link) {
    const parent = link.closest('.has-mega-menu, .has-dropdown');
    if (!parent) return false;
    // Only the DIRECT > a is the toggle, not sub-links inside dropdown
    const directLink = parent.querySelector(':scope > a');
    return directLink === link;
  }

  function isMobile() {
    return window.innerWidth <= 900;
  }
/* ==========================================
   3. UNIFIED SCROLL HANDLER
   ========================================== */
window.addEventListener('scroll', function () {

  const scrollY = window.scrollY;

  // Navbar sticky
  if (navbar) {
    if (scrollY > 80) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }

  // Back to top
  if (backToTop) {
    if (scrollY > 400) {
      backToTop.classList.add('visible');
    } else {
      backToTop.classList.remove('visible');
    }
  }

  updateActiveNavLink();

});


/* ==========================================
   4. ACTIVE NAV LINK ON SCROLL (DROPDOWN FIX)
   ========================================== */
let lastActiveSection = null;

function updateActiveNavLink() {

  let currentSection = null;

  const scrollPosition =
    window.scrollY + (navbar ? navbar.offsetHeight : 80);

  sections.forEach(function (section) {

    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const sectionBottom = sectionTop + sectionHeight;

    if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
      currentSection = section.getAttribute("id");
    }

  });

  // agar koi new section nahi mila to last active use karo
  if (!currentSection && lastActiveSection) {
    currentSection = lastActiveSection;
  }

  if (!currentSection) return;

  lastActiveSection = currentSection;

  // remove active
  navLinks.forEach(function (link) {
    link.classList.remove("active");
  });

  dropdownParents.forEach(function(parent){
    const parentLink = parent.querySelector(":scope > a");
    if(parentLink){
      parentLink.classList.remove("active");
    }
  });

  navLinks.forEach(function (link) {

    const href = link.getAttribute("href");
    if (!href || !href.includes("#")) return;

    const linkHash = href.split("#")[1];

    if (linkHash === currentSection) {

      link.classList.add("active");

      const parentDropdown = link.closest(".has-mega-menu, .has-dropdown");

      if (parentDropdown) {
        const parentLink = parentDropdown.querySelector(":scope > a");
        if (parentLink) parentLink.classList.add("active");
      }

    }

  });

}

  /* ==========================================
     5. HAMBURGER MENU TOGGLE
     ========================================== */
  if (hamburger && navMenu) {
    hamburger.addEventListener('click', function (e) {
      e.stopPropagation();
      hamburger.classList.toggle('open');
      navMenu.classList.toggle('open');
      document.body.style.overflow =
        navMenu.classList.contains('open') ? 'hidden' : '';
    });

    // ⭐ FIX: Close menu ONLY on non-dropdown link clicks
    navMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        // ⭐ If this link is a dropdown toggle, DON'T close the menu
        if (isDropdownToggle(this)) return;

        hamburger.classList.remove('open');
        navMenu.classList.remove('open');
        document.body.style.overflow = '';
      });
    });

    // Close on outside click
    document.addEventListener('click', function (e) {
      if (
        navMenu.classList.contains('open') &&
        !navMenu.contains(e.target) &&
        !hamburger.contains(e.target)
      ) {
        hamburger.classList.remove('open');
        navMenu.classList.remove('open');
        document.body.style.overflow = '';

        // Also close any open dropdowns
        dropdownParents.forEach(function (p) {
          p.classList.remove('open');
        });
      }
    });
  }

  /* ==========================================
     6. MEGA MENU / DROPDOWN TOGGLE — FIXED
     ========================================== */
  dropdownParents.forEach(function (parent) {
    const toggleLink = parent.querySelector(':scope > a');
    if (!toggleLink) return;

    toggleLink.addEventListener('click', function (e) {
      if (isMobile()) {
        e.preventDefault();
        e.stopPropagation();

        // Close other dropdowns
        dropdownParents.forEach(function (otherParent) {
          if (otherParent !== parent) {
            otherParent.classList.remove('open');
          }
        });

        // Toggle current
        parent.classList.toggle('open');
      }
    });
  });

  // Close dropdowns on outside click (mobile)
  document.addEventListener('click', function (e) {
    if (isMobile()) {
      dropdownParents.forEach(function (parent) {
        if (!parent.contains(e.target)) {
          parent.classList.remove('open');
        }
      });
    }
  });

  // Reset on resize
  window.addEventListener('resize', function () {
    dropdownParents.forEach(function (parent) {
      parent.classList.remove('open');
    });
  });

  /* ==========================================
     7. DROPDOWN SUB-LINKS — Close everything
     ========================================== */
  document.querySelectorAll('.mega-menu a, .dropdown-menu a').forEach(function (subLink) {
    subLink.addEventListener('click', function () {
      // Close dropdown
      dropdownParents.forEach(function (parent) {
        parent.classList.remove('open');
      });

      // Close mobile menu
      if (hamburger && navMenu) {
        hamburger.classList.remove('open');
        navMenu.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  });

  /* ==========================================
     8. SMOOTH SCROLL — FIXED
     ========================================== */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      // ⭐ FIX: Skip dropdown toggles completely!
      if (isDropdownToggle(this)) return;

      const href = this.getAttribute('href');

      // Skip empty or placeholder hashes
      if (!href || href === '#' || href === '#!' || href.length <= 1) return;

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const navbarHeight = navbar ? navbar.offsetHeight : 80;
        const targetPos    = target.getBoundingClientRect().top +
                             window.pageYOffset - navbarHeight - 20;
        window.scrollTo({ top: targetPos, behavior: 'smooth' });

        // Update active state after scroll completes
        setTimeout(function () {
          navLinks.forEach(function (link) {
            if (isDropdownToggle(link)) return;
            link.classList.remove('active');
          });
          navLinks.forEach(function (link) {
            if (link.getAttribute('href') === href) {
              link.classList.add('active');
            }
          });
        }, 600);
      }
    });
  });

  /* ==========================================
     9. ANIMATED COUNTERS
     ========================================== */
  function animateCounter(el, target, duration) {
    let start   = 0;
    const step  = Math.ceil(target / (duration / 16));
    const timer = setInterval(function () {
      start += step;
      if (start >= target) {
        start = target;
        clearInterval(timer);
      }
      el.textContent = start.toLocaleString();
    }, 16);
  }

  function startCounters(counterEls) {
    counterEls.forEach(function (el) {
      if (el.dataset.counted) return;
      el.dataset.counted = 'true';
      const target = parseInt(el.getAttribute('data-target'), 10);
      if (!isNaN(target)) {
        animateCounter(el, target, 2000);
      }
    });
  }

  const counterSection = document.querySelector('.stats-section');
  if (counterSection) {
    const counterObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            startCounters(counterSection.querySelectorAll('.counter'));
            counterObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );
    counterObserver.observe(counterSection);
  }

  const heroStats = document.querySelectorAll('.hero-stats-row .counter');
  if (heroStats.length) {
    setTimeout(function () {
      startCounters(heroStats);
    }, 1200);
  }

  /* ==========================================
     10. SWIPER TESTIMONIALS
     ========================================== */
  if (typeof Swiper !== 'undefined' && document.querySelector('.testiSwiper')) {
    new Swiper('.testiSwiper', {
      slidesPerView: 1,
      spaceBetween:  30,
      loop:          true,
      autoplay: { delay: 4500, disableOnInteraction: false },
      pagination: { el: '.swiper-pagination', clickable: true },
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
      breakpoints: {
        640:  { slidesPerView: 1 },
        768:  { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
    });
  }

  /* ==========================================
     11. PROJECT FILTER TABS
     ========================================== */
  const filterBtns = document.querySelectorAll('.pf-btn');
  const projCards  = document.querySelectorAll('.proj-card');

  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterBtns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      const filter = btn.getAttribute('data-filter');
      projCards.forEach(function (card) {
        if (filter === 'all' || card.getAttribute('data-filter') === filter) {
          card.style.display   = '';
          card.style.animation = 'fadeInUp 0.5s ease forwards';
        } else {
          card.style.display   = 'none';
          card.style.animation = '';
        }
      });
    });
  });

  /* ==========================================
     12. BACK TO TOP BUTTON
     ========================================== */
  if (backToTop) {
    backToTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ==========================================
     13. CONTACT FORM VALIDATION
     ========================================== */
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      let valid = true;

      contactForm.querySelectorAll('.field-error').forEach(function (err) { err.remove(); });
      contactForm.querySelectorAll('.form-control').forEach(function (fc) { fc.classList.remove('input-error'); });

      contactForm.querySelectorAll('[required]').forEach(function (field) {
        if (!field.value.trim()) {
          valid = false;
          showFieldError(field, 'This field is required.');
        }
      });

      const emailField = contactForm.querySelector('#email');
      if (emailField && emailField.value.trim()) {
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value.trim())) {
          valid = false;
          showFieldError(emailField, 'Please enter a valid email address.');
        }
      }

      const phoneField = contactForm.querySelector('#phone');
      if (phoneField && phoneField.value.trim()) {
        if (!/^[6-9]\d{9}$/.test(phoneField.value.trim())) {
          valid = false;
          showFieldError(phoneField, 'Please enter a valid 10-digit Indian mobile number.');
        }
      }

      if (valid) showFormSuccess();
    });
  }

  function showFieldError(field, message) {
    const existing = field.parentNode.querySelector('.field-error');
    if (existing) existing.remove();
    field.classList.add('input-error');
    const errorEl       = document.createElement('span');
    errorEl.className   = 'field-error';
    errorEl.textContent = message;
    field.parentNode.appendChild(errorEl);
  }

  function showFormSuccess() {
    const successMsg = document.getElementById('formSuccess');
    if (successMsg) {
      successMsg.style.display = 'flex';
      contactForm.reset();
      setTimeout(function () { successMsg.style.display = 'none'; }, 5000);
    }
  }

  /* ==========================================
     14. IMAGE LAZY LOADING
     ========================================== */
  if ('IntersectionObserver' in window) {
    const lazyImages  = document.querySelectorAll('img[data-src]');
    const imgObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src   = img.dataset.src;
          img.removeAttribute('data-src');
          imgObserver.unobserve(img);
        }
      });
    });
    lazyImages.forEach(function (img) { imgObserver.observe(img); });
  }

  /* ==========================================
     15. PRELOADER
     ========================================== */
  if (preloader) {
    window.addEventListener('load', function () {
      preloader.style.opacity    = '0';
      preloader.style.visibility = 'hidden';
      setTimeout(function () { preloader.style.display = 'none'; }, 500);
    });
  }

});