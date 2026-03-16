<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">

        <!-- Company Column -->
        <div class="footer-col footer-about">
          <div class="footer-logo">
             <img src="./assets/uploads/gsmelogo.webp" style="width:31%; height:96px;">
            <div>
              <span class="fl-main">GSME</span>
              <span class="fl-sub">Enterprises</span>
            </div>
          </div>
          <p class="footer-desc">
            GSME Enterprises is a premier mining and environmental consultancy
            firm based in Bhopal, MP providing expert geological, survey and
            environmental compliance services across India since 2000.
          </p>
          <div class="footer-socials">
            <a href="#" class="fs-link" aria-label="LinkedIn">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="fs-link" aria-label="Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://wa.me/918871117481" class="fs-link" aria-label="WhatsApp">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="mailto:gsmeoneworld@gmail.com" class="fs-link" aria-label="Email">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
          <h4 class="footer-col-title">Quick Links</h4>
          <ul class="footer-links">
            <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
            <li><a href="pages/about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
            <li><a href="pages/services.php"><i class="fas fa-chevron-right"></i> Our Services</a></li>
            <li><a href="pages/services.php#projects"><i class="fas fa-chevron-right"></i> Projects</a></li>
            <li><a href="pages/contact.php"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
          </ul>
        </div>

        <!-- Services Column -->
        <div class="footer-col">
          <h4 class="footer-col-title">Our Services</h4>
          <ul class="footer-links">
            <li><a href="pages/services.php#mining-consultancy"><i class="fas fa-chevron-right"></i> Mining Consultancy</a></li>
            <li><a href="pages/services.php#eia"><i class="fas fa-chevron-right"></i> Environmental Clearance</a></li>
            <li><a href="pages/services.php#pollution"><i class="fas fa-chevron-right"></i> Pollution Control</a></li>
            <li><a href="pages/services.php#dgps"><i class="fas fa-chevron-right"></i> DGPS Survey</a></li>
            <li><a href="pages/services.php#drone"><i class="fas fa-chevron-right"></i> Drone Mapping</a></li>
            <li><a href="pages/services.php#gis"><i class="fas fa-chevron-right"></i> GIS Mapping</a></li>
            <li><a href="pages/services.php#hydro"><i class="fas fa-chevron-right"></i> Hydrogeology Survey</a></li>
            <li><a href="pages/services.php#forest"><i class="fas fa-chevron-right"></i> Forest Clearance</a></li>
          </ul>
        </div>

        <!-- Contact Column -->
        <div class="footer-col">
          <h4 class="footer-col-title">Contact Us</h4>
          <ul class="footer-contact-list">
            <li>
              <div class="fcl-icon"><i class="fas fa-map-marker-alt"></i></div>
              <div class="fcl-text">
                H-12 Shanti Kunj Bharat Nagar,<br>
                E-8 Arera Colony,<br>
                Bhopal, MP - 462016
              </div>
            </li>
            <li>
              <div class="fcl-icon"><i class="fas fa-phone-alt"></i></div>
              <div class="fcl-text">
                <a href="tel:+918871117481">+91 88711 17481</a>
              </div>
            </li>
            <li>
              <div class="fcl-icon"><i class="fas fa-envelope"></i></div>
              <div class="fcl-text">
                <a href="mailto:gsmeoneworld@gmail.com">gsmeoneworld@gmail.com</a>
              </div>
            </li>
            <li>
              <div class="fcl-icon"><i class="fas fa-clock"></i></div>
              <div class="fcl-text">
                Mon - Sat: 9:00 AM - 6:00 PM
              </div>
            </li>
          </ul>

          <!-- WhatsApp Button -->
          <a href="https://wa.me/918871117481" class="footer-whatsapp">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>&copy; <?= date('Y') ?> GSME Enterprises. All Rights Reserved.</p>
      <p>Designed with <i class="fas fa-heart" style="color:#f97316"></i> for Mining Excellence</p>
    </div>
  </div>
</footer>

<!-- WhatsApp Float Button -->
<a href="https://wa.me/918871117481" class="wa-float" target="_blank" aria-label="WhatsApp">
  <i class="fab fa-whatsapp"></i>
  <span class="wa-tooltip">Chat with us!</span>
</a>

<!-- Back to Top -->
<button class="back-to-top" id="backToTop" aria-label="Back to Top">
  <i class="fas fa-chevron-up"></i>
</button>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '' ?>assets/js/main.js"></script>
</body>
</html>