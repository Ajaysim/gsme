<?php
$base = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Topbar -->
<div class="topbar">
  <div class="container topbar-inner">
    <div class="topbar-left">
      <a href="tel:+918871117481">
        <i class="fas fa-phone-alt"></i> +91 88711 17481
      </a>
      <a href="mailto:gsmeoneworld@gmail.com">
        <i class="fas fa-envelope"></i> gsmeoneworld@gmail.com
      </a>
    </div>
    <div class="topbar-right">
      <span><i class="fas fa-map-marker-alt"></i> Bhopal, Madhya Pradesh</span>
      <div class="topbar-socials">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://wa.me/918871117481" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- Main Navbar -->
<nav class="navbar" id="mainNavbar">
  <div class="container navbar-inner">

    <!-- Logo -->
    <a href="<?= $base ?>index.php" class="navbar-logo">
      <div class="logo-icon">
        <img src="./assets/uploads/gsmelogo.webp" style="width:100%; height:47px;">
      </div>
      <div class="logo-text">
        <span class="logo-main">GSME</span>
        <span class="logo-sub">Enterprises</span>
      </div>
    </a>

    <!-- Nav Menu -->
    <ul class="nav-menu" id="navMenu">
      <li>
        <a href="<?= $base ?>index.php" class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">
         <i class="fa-solid fa-house"></i> Home
        </a>
      </li>
      <li>
        <a href="<?= $base ?>pages/about.php" class="<?= $currentPage === 'about.php' ? 'active' : '' ?>">
         <i class="fa-solid fa-circle-info"></i> About
        </a>
      </li>

      <!-- Mega Menu -->
      <li class="has-mega-menu">
        <a href="<?= $base ?>pages/services.php" class="<?= $currentPage === 'services.php' ? 'active' : '' ?>">
         <i class="fa-brands fa-servicestack"></i> Services🔻
        </a>
        <div class="mega-menu">
          <div class="container">
            <div class="mega-menu-grid">
              <div class="mega-col">
                <h4><i class="fas fa-mountain"></i> Mining Services</h4>
                <ul>
                  <li><a href="<?= $base ?>pages/services.php#mining-consultancy">
                    <i class="fas fa-hard-hat"></i> Mining Consultancy
                  </a></li>
                  <li><a href="<?= $base ?>pages/services.php#eia">
                    <i class="fas fa-leaf"></i> Environmental Compliance & EIA
                  </a></li>
                  <li><a href="<?= $base ?>pages/services.php#pollution">
                    <i class="fas fa-smog"></i> Pollution Control Documentation
                  </a></li>
                  <li><a href="<?= $base ?>pages/services.php#forest">
                    <i class="fas fa-tree"></i> Forest Clearance Assistance
                  </a></li>
                </ul>
              </div>
              <div class="mega-col">
                <h4><i class="fas fa-satellite-dish"></i> Survey Services</h4>
                <ul>
                  <li><a href="<?= $base ?>pages/services.php#dgps">
                    <i class="fas fa-satellite"></i> DGPS Survey
                  </a></li>
                  <li><a href="<?= $base ?>pages/services.php#drone">
                    <i class="fas fa-helicopter"></i> Drone Survey & Mapping
                  </a></li>
                  <li><a href="<?= $base ?>pages/services.php#gis">
                    <i class="fas fa-map"></i> GIS Mapping
                  </a></li>
                  <li><a href="<?= $base ?>pages/services.php#hydro">
                    <i class="fas fa-water"></i> Hydrogeology Survey
                  </a></li>
                  <li><a href="<?= $base ?>pages/services.php#geotech">
                    <i class="fas fa-layer-group"></i> Geo Technical Investigation
                  </a></li>
                </ul>
              </div>
              <div class="mega-col mega-highlight">
                <div class="mega-cta-box">
                  <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=300&q=80" alt="Mining">
                  <h4>Need a Consultation?</h4>
                  <p>Talk to our expert team today</p>
                  <a href="https://gsmeoneworld.co.in/Admin/login.php" class="mega-cta-btn">
                    Login
                  </a>
                  <div class="mega-phone">
                    <i class="fas fa-phone-alt"></i>
                    <span>+91 88711 17481</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>

      <li>
        <!-- <a href="<?= $base ?>pages/services.php#projects" class="<?= $currentPage === 'projects.php' ? 'active' : '' ?>">
          Projects
        </a> -->
      </li>
      <!-- <li>
        <a href="<?= $base ?>pages/services.php#technology">
          Technology
        </a>
      </li> -->
      <li>
        <a href="<?= $base ?>pages/contact.php" class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>">
         <i class="fa-solid fa-address-book"></i> Contact
        </a>
      </li>
    </ul>

    <!-- CTA + Hamburger -->
    <div class="navbar-actions">
      <a href="https://gsmeoneworld.co.in/Admin/login.php" class="btn-consultation">
        <i class="fas fa-comments"></i> Login
      </a>
      <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>
</nav>