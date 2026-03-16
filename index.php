<?php
$pageTitle = "GSME Enterprises | Mining & Environmental Consultancy Bhopal";
$pageDescription = "GSME Enterprises - 24+ Years of Expert Mining Consultancy, EIA, Pollution Control, DGPS Survey, Drone Mapping & GIS from Bhopal MP";
include 'includes/header.php';
include 'includes/navbar.php';
?>


<?php
include "config.php";
$query = "SELECT * FROM hero_section LIMIT 1";
$result = mysqli_query($conn, $query);
$hero = mysqli_fetch_assoc($result);
?>
<!-- ===== HERO SECTION ===== -->
<section class="hero-section" id="home" style="overflow-x:hidden;">
  <div class="hero-bg" style="background-image:url('./<?php echo $hero['bg_image']; ?>');"></div>
  <div class="hero-overlay"></div>

  <div class="container hero-container">
    <!-- Left Content -->
    <div class="hero-left" data-aos="fade-right" data-aos-duration="1000">
      <div class="hero-badge">
        <i class="fas fa-hard-hat"></i>
        <span><?php echo $hero['badge_text']; ?></span>
      </div>

      <h1 class="hero-heading">
        <?php echo $hero['heading1']; ?>&amp;<br>
        <span class="gradient-text"><?php echo $hero['heading2']; ?></span><br>
        <?php echo $hero['heading3']; ?>
      </h1>

      <p class="hero-para">
        Precision Mining Solutions with <strong>DGPS, Drone Survey &amp; GIS Mapping.</strong>
        We help mining projects achieve regulatory compliance, accurate land surveys,
        and sustainable resource development across India.
      </p>

      <div class="hero-btns">
        <a href="pages/services.php" class="btn-hero-primary">
          <i class="fas fa-compass"></i> Explore Services
        </a>
        <a href="pages/contact.php" class="btn-hero-outline">
          <i class="fas fa-phone-alt"></i> Get Consultation
        </a>
      </div>

      <!-- Stats Row -->
      <div class="hero-stats-row">
        <div class="hs-item">
          <strong class="counter" data-target="<?php echo $hero['projects']; ?>">0</strong><strong>+</strong>
          <span>Projects</span>
        </div>
        <div class="hs-sep"></div>
        <div class="hs-item">
          <strong class="counter" data-target="<?php echo $hero['clients']; ?>">0</strong><strong>+</strong>
          <span>Clients</span>
        </div>
        <div class="hs-sep"></div>
        <div class="hs-item">
          <strong class="counter" data-target="<?php echo $hero['years']; ?>">0</strong><strong>+</strong>
          <span>Years</span>
        </div>
        <div class="hs-sep"></div>
        <div class="hs-item">
          <strong class="counter" data-target="<?php echo $hero['satisfaction']; ?>">0</strong><strong>%</strong>
          <span>Satisfaction</span>
        </div>
      </div>
    </div>

    <!-- Right Visual -->
    <div class="hero-right" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
      <div class="hero-img-wrapper">
        <!-- Animated rings -->
        <div class="h-ring h-ring-1"></div>
        <div class="h-ring h-ring-2"></div>
        <div class="h-ring h-ring-3"></div>

        <!-- Main image -->
        <div class="hero-main-img">
          <img src="./<?php echo $hero['main_image']; ?>" alt="">
        </div>

        <!-- Floating info cards -->
        <div class="h-float-card fc-1">
          <div class="fc-icon"><i class="fas fa-satellite-dish"></i></div>
          <div class="fc-text">
            <strong>DGPS Survey</strong>
            <span>Sub-cm Accuracy</span>
          </div>
        </div>
        <div class="h-float-card fc-2">
          <div class="fc-icon"><i class="fas fa-helicopter"></i></div>
          <div class="fc-text">
            <strong>Drone Mapping</strong>
            <span>HD Aerial Survey</span>
          </div>
        </div>
        <div class="h-float-card fc-3">
          <div class="fc-icon"><i class="fas fa-shield-alt"></i></div>
          <div class="fc-text">
            <strong>Eco Clearance</strong>
            <span>MoEF Approved</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="hero-scroll">
    <a href="#clients-section">
      <div class="scroll-mouse">
        <div class="scroll-wheel"></div>
      </div>
      <span>Scroll Down</span>
    </a>
  </div>
</section>


<!-- ===== CLIENTS SECTION ===== -->
<?php

$query = "SELECT * FROM clients WHERE status = 1 ORDER BY id ASC";
$result = mysqli_query($conn, $query);

$clients = [];

while ($row = mysqli_fetch_assoc($result)) {
  $clients[] = $row;
}

?>
<section class="clients-section" id="clients-section" style="overflow-x:hidden;">
  <div class="container">

    <!-- Section Label -->
    <p class="clients-label" data-aos="fade-up">
      <img src="assets/icons/handshake.png" class="clients-label-icon" alt="">
      Trusted By India's Leading Mining Companies
    </p>

    <!-- Marquee Wrapper -->
    <div class="clients-marquee-wrapper">

      <div class="clients-marquee">

        <?php foreach ($clients as $c): ?>

          <div class="client-card">

            <!-- Client Logo -->
            <div class="cc-icon">
              <img src="./<?= $c['logo']; ?>" alt="<?= $c['name']; ?>">
            </div>

            <!-- Client Info -->
            <div class="cc-info">

              <strong style="color:<?= $c['color']; ?>">
                <?= $c['abbr']; ?>
              </strong>

              <span>
                <?= $c['name']; ?>
              </span>

            </div>

          </div>

        <?php endforeach; ?>

      </div>

    </div>

  </div>
</section>
<style>
  .clients-label-icon {
    width: 20px;
    margin-right: 8px;
    vertical-align: middle;
  }

  .client-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 18px;
  }

  .cc-icon img {
    width: 40px;
    height: 40px;
    object-fit: contain;
  }

  .cc-info strong {
    display: block;
    font-size: 14px;
  }

  .cc-info span {
    font-size: 12px;
    color: #666;
  }
</style>



<!-- ===== ABOUT SECTION ===== -->
<?php
$query = "SELECT * FROM about LIMIT 1";
$result = mysqli_query($conn, $query);
$about = mysqli_fetch_assoc($result);
?>
<section class="about-section" id="about-section" style="overflow-x:hidden;">
  <div class="container">
    <div class="about-wrapper">

      <!-- Left Images -->
      <div class="about-imgs" data-aos="fade-right" data-aos-duration="900">
        <div class="aimg-main">
          <img src="./<?= $about['image_main'] ?>"
            alt="GSME Mining Operations">
          <div class="aimg-badge">
            <div class="ab-num"><? $about['experience_years'] ?><span>+</span></div>
            <div class="ab-lbl">Years of<br>Excellence</div>
          </div>
        </div>
        <div class="aimg-small">
          <img src="./<?= $about['image_small1'] ?>"
            alt="Survey Team">
        </div>
        <div class="aimg-small aimg-small-2">
          <img src="./<?= $about['image_small2'] ?>"
            alt="Drone Survey">
        </div>
      </div>

      <!-- Right Content -->
      <div class="about-content" data-aos="fade-left" data-aos-duration="900">
        <div class="sec-tag">About GSME</div>
        <h2 class="sec-title">
          About <span class="hl">GSME Enterprises</span>
        </h2>
        <p class="about-lead">
          A Premier Mining &amp; Environmental Consultancy from Bhopal, MP
        </p>
        <p class="about-desc">
          GSME Enterprises is a leading mining and environmental consultancy firm
          based in Bhopal, Madhya Pradesh. With over <strong>24 years of experience</strong>,
          we provide expert services in mining plan preparation, environmental clearance,
          pollution control documentation, and advanced geospatial surveying using
          DGPS, drone technology and GIS systems.
        </p>
        <!-- <p class="about-desc">
       
        </p> -->

        <div class="about-checklist">
          <div class="ac-item"><i class="fas fa-check-circle"></i> Licensed Mining Plan Preparers</div>
          <div class="ac-item"><i class="fas fa-check-circle"></i> Certified Environmental Consultants</div>
          <div class="ac-item"><i class="fas fa-check-circle"></i> DGPS & Drone Survey Specialists</div>
          <div class="ac-item"><i class="fas fa-check-circle"></i> Forest & Environmental Clearance Experts</div>
          <div class="ac-item"><i class="fas fa-check-circle"></i> GIS & Remote Sensing Professionals</div>
          <div class="ac-item"><i class="fas fa-check-circle"></i> Pan-India Project Experience</div>
        </div>

        <div class="about-actions">
          <a href="pages/about.php" class="btn-primary">
            <i class="fas fa-arrow-right"></i> Know More About Us
          </a>
          <div class="about-phone">
            <div class="ap-icon"><i class="fas fa-phone-alt"></i></div>
            <div class="ap-text">
              <span>Call Us Anytime</span>
              <strong><?= $about['phone'] ?></strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- ===== PROJECTS SECTION ===== -->
<section class="projects-section" id="projects" style="overflow-x:hidden;">
  <div class="container">
    <div class="sec-header" data-aos="fade-up">
      <div class="sec-tag">Our Work</div>
      <h2 class="sec-title">Projects &amp; <span class="hl">Case Studies</span></h2>
      <p class="sec-sub">
        Delivering excellence across diverse mining and environmental projects across India
      </p>
    </div>

    <!-- Filter Tabs -->
    <div class="proj-filters" data-aos="fade-up">
      <button class="pf-btn active" data-filter="all">All Projects</button>
      <button class="pf-btn" data-filter="survey">Survey</button>
      <button class="pf-btn" data-filter="environment">Environment</button>
      <button class="pf-btn" data-filter="mining">Mining</button>
    </div>

    <?php

    $query = "SELECT * FROM projects WHERE status=1 ORDER BY id DESC";
    $result = $conn->query($query);

    ?>

    <div class="proj-grid">

      <?php
      $i = 0;
      while ($p = $result->fetch_assoc()):
      ?>

        <div class="proj-card"
          data-filter="<?= $p['filter_type'] ?? '' ?>"
          data-aos="fade-up"
          data-aos-delay="<?= ($i % 3) * 100 ?>">

          <div class="pc-img">

            <?php if (!empty($p['video'])): ?>

              <!-- VIDEO -->
              <video class="proj-video" autoplay muted loop playsinline>
                <source src="<?= $p['video'] ?>" type="video/mp4">
              </video>

            <?php else: ?>

              <!-- IMAGE -->
              <img src="<?= $p['image'] ?? 'assets/images/default.jpg' ?>" alt="<?= $p['title'] ?? '' ?>">

            <?php endif; ?>


            <div class="pc-overlay">

              <div class="pc-ov-content">

                <span class="pc-type"
                  style="background:<?= $p['color'] ?? '#666' ?>">

                  <?= $p['type'] ?? '' ?>

                </span>

                <h3><?= $p['title'] ?? '' ?></h3>

                <div class="pc-meta">

                  <span>
                    <i class="fas fa-map-marker-alt"></i>
                    <?= $p['location'] ?? '' ?>
                  </span>

                  <?php if (!empty($p['client'])): ?>
                    <span>
                      <i class="fas fa-user"></i>
                      <?= $p['client'] ?>
                    </span>
                  <?php endif; ?>

                  <?php if (!empty($p['year'])): ?>
                    <span>
                      <i class="fas fa-calendar"></i>
                      <?= $p['year'] ?>
                    </span>
                  <?php endif; ?>

                </div>

              </div>

            </div>

          </div>


          <div class="pc-info">

            <span class="pc-badge"
              style="color:<?= $p['color'] ?? '#666' ?>;
      background:<?= ($p['color'] ?? '#666') ?>18">

              <?= $p['type'] ?? '' ?>

            </span>

            <h3><?= $p['title'] ?? '' ?></h3>

            <p>
              <i class="fas fa-map-marker-alt"></i>
              <?= $p['location'] ?? '' ?>, India
            </p>

          </div>

        </div>

      <?php
        $i++;
      endwhile;
      ?>

    </div>
  </div>
</section>
<style>
  .proj-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
  }

  .pc-img {
    position: relative;
    overflow: hidden;
    height: 260px;
  }

  .pc-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
  }
</style>
<script>
  document.querySelectorAll('.proj-video').forEach(video => {

    video.parentElement.addEventListener('mouseenter', () => {
      video.pause();
    });

    video.parentElement.addEventListener('mouseleave', () => {
      video.play();
    });

  });
</script>


<!-- ===== TECHNOLOGY SECTION ===== -->
<?php
$bgQuery = "SELECT bg_video FROM technologies WHERE status=1 LIMIT 1";
$bgResult = $conn->query($bgQuery);
$bgRow = $bgResult->fetch_assoc();
$bgVideo = $bgRow['bg_video'] ?? '';
?>
<section class="tech-section" id="technology" style="overflow-x:hidden;">

  <!-- Background Video -->
  <div class="tech-bg-video">
    <video autoplay muted loop playsinline>
      <source src="<?= $bgVideo ?>" type="video/mp4">
    </video>
  </div>

  <div class="tech-bg-overlay"></div>

  <div class="container">

    <div class="sec-header" data-aos="fade-up">
      <div class="sec-tag light">Our Technology</div>
      <h2 class="sec-title light">
        Modern <span class="hl-light">Surveying Technology</span>
      </h2>
      <p class="sec-sub light">
        We use cutting-edge equipment and industry-leading software
        for precise, reliable results
      </p>
    </div>

    <?php
    $query = "SELECT * FROM technologies WHERE status=1 ORDER BY id ASC";
    $result = $conn->query($query);
    ?>

    <div class="tech-grid">

      <?php
      $i = 0;
      while ($t = $result->fetch_assoc()):
      ?>

        <div class="tech-card"
          data-aos="zoom-in"
          data-aos-delay="<?= $i * 80 ?>">

          <div class="tc-icon">
            <i class="<?= $t['icon'] ?>"></i>
          </div>

          <h3><?= $t['title'] ?></h3>

          <p><?= $t['description'] ?></p>

          <div class="tc-line"></div>

        </div>

      <?php
        $i++;
      endwhile;
      ?>

    </div>

  </div>
</section>
<style>
  .tech-section {
    position: relative;
    overflow: hidden;
  }

  .tech-bg-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
  }

  .tech-bg-video video {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .tech-bg-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.65);
    z-index: 1;
  }

  .tech-section .container {
    position: relative;
    z-index: 2;
  }
</style>



<!-- ===== SERVICES SECTION ===== -->
<?php
$query = "SELECT * FROM services WHERE status=1 ORDER BY id ASC";
$result = $conn->query($query);
?>
<section class="services-section" id="services-section" style="overflow-x:hidden;">
  <div class="svc-bg-shape"></div>
  <div class="container">
    <div class="sec-header" data-aos="fade-up">
      <div class="sec-tag">What We Do</div>
      <h2 class="sec-title">Our <span class="hl">Core Services</span></h2>
      <p class="sec-sub">
        Comprehensive mining &amp; environmental solutions tailored for your
        project requirements across India
      </p>
    </div>

    <div class="svc-grid">

      <?php
      $i = 0;
      while ($s = $result->fetch_assoc()):

        $tags = explode(',', $s['tags']);
      ?>

        <div class="svc-card"
          id="<?= $s['slug'] ?>"
          data-aos="fade-up"
          data-aos-delay="<?= ($i % 3) * 100 ?>">

          <div class="svc-img">
            <img src="./assets/<?= $s['image'] ?>" alt="<?= $s['title'] ?>">
            <div class="svc-img-overlay"
              style="background:<?= $s['color'] ?>33">
            </div>
          </div>

          <div class="svc-body">

            <div class="svc-icon"
              style="background:<?= $s['color'] ?>18;color:<?= $s['color'] ?>">

              <i class="<?= $s['icon'] ?>"></i>

            </div>

            <h3><?= $s['title'] ?></h3>

            <p><?= $s['description'] ?></p>

            <div class="svc-tags">

              <?php foreach ($tags as $tag): ?>

                <span class="svc-tag"
                  style="color:<?= $s['color'] ?>;
                  border-color:<?= $s['color'] ?>33;
                  background:<?= $s['color'] ?>11">

                  <?= trim($tag) ?>

                </span>

              <?php endforeach; ?>

            </div>

            <a href="pages/services.php#<?= $s['slug'] ?>"
              class="svc-link"
              style="color:<?= $s['color'] ?>">

              Know More
              <i class="fas fa-long-arrow-alt-right"></i>

            </a>

          </div>

        </div>

      <?php
        $i++;
      endwhile;
      ?>

    </div>
  </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<?php

$whyCards = $conn->query("SELECT * FROM why_choose_us WHERE status=1 ORDER BY id ASC");

$whySection = $conn->query("SELECT * FROM why_section LIMIT 1")->fetch_assoc();

?>
<section class="why-section" id="why" style="overflow-x:hidden;">

  <div class="container">

    <div class="why-wrapper">

      <!-- LEFT SIDE -->

      <div class="why-left" data-aos="fade-right">

        <div class="sec-tag">Why GSME</div>

        <h2 class="sec-title">
          Why <span class="hl"><?= $whySection['title'] ?></span>
        </h2>

        <p class="sec-sub">
          <?= $whySection['subtitle'] ?>
        </p>


        <div class="why-cards">

          <?php while ($w = $whyCards->fetch_assoc()): ?>

            <div class="why-card" data-aos="fade-up">

              <div class="wc-icon"
                style="background:<?= $w['color'] ?>18;color:<?= $w['color'] ?>">

                <i class="<?= $w['icon'] ?>"></i>

              </div>

              <div class="wc-text">

                <h4><?= $w['title'] ?></h4>

                <p><?= $w['description'] ?></p>

              </div>

            </div>

          <?php endwhile; ?>

        </div>

      </div>


      <!-- RIGHT SIDE -->

      <div class="why-right" data-aos="fade-left">

        <div class="why-img-stack">

          <img class="wi-main"
            src="<?= $whySection['main_image'] ?>"
            alt="GSME Team">

          <img class="wi-sub"
            src="<?= $whySection['sub_image'] ?>"
            alt="Survey Operations">

          <div class="wi-badge">

            <i class="<?= $whySection['badge_icon'] ?>"></i>

            <div>

              <strong><?= $whySection['badge_title'] ?></strong>

              <span><?= $whySection['badge_text'] ?></span>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>



<!-- ===== STATS SECTION ===== -->
<?php

$stats = $conn->query("SELECT * FROM stats WHERE status=1 ORDER BY display_order ASC");

?>
<section class="stats-section" id="stats" style="overflow-x:hidden;">

  <div class="stats-overlay"></div>

  <div class="container">

    <div class="stats-grid">

      <?php
      $i = 0;
      while ($s = $stats->fetch_assoc()):
      ?>

        <div class="stat-box"
          data-aos="zoom-in"
          data-aos-delay="<?= $i * 80 ?>">

          <div class="sb-icon">
            <i class="<?= $s['icon'] ?>"></i>
          </div>

          <div class="sb-number">

            <span class="counter"
              data-target="<?= $s['number_value'] ?>">0</span>

            <?= $s['suffix'] ?>

          </div>

          <div class="sb-label">

            <?= $s['label'] ?>

          </div>

        </div>

      <?php
        $i++;
      endwhile;
      ?>

    </div>

  </div>

</section>


<!-- ===== TESTIMONIALS SECTION ===== -->
<?php
$testimonials = $conn->query(
  "SELECT * FROM testimonials 
 WHERE status=1 
 ORDER BY display_order ASC"
);
?>
<section class="testi-section" id="testimonials" style="overflow-x:hidden;">

  <div class="testi-shape"></div>

  <div class="container">

    <div class="sec-header" data-aos="fade-up">
      <div class="sec-tag">Client Reviews</div>
      <h2 class="sec-title">What Our <span class="hl">Clients Say</span></h2>
    </div>

    <div class="swiper testiSwiper" data-aos="fade-up">

      <div class="swiper-wrapper">

        <?php while ($t = $testimonials->fetch_assoc()): ?>

          <div class="swiper-slide">

            <div class="testi-card">

              <div class="tc-quote">
                <i class="fas fa-quote-left"></i>
              </div>

              <div class="tc-stars">

                <?php for ($s = 0; $s < $t['stars']; $s++): ?>

                  <i class="fas fa-star"></i>

                <?php endfor; ?>

              </div>

              <p class="tc-text">
                <?= $t['message'] ?>
              </p>

              <div class="tc-author">

                <img src="<?= $t['image'] ?>" alt="<?= $t['name'] ?>">

                <div>

                  <strong><?= $t['name'] ?></strong>

                  <span><?= $t['position'] ?></span>

                </div>

              </div>

            </div>

          </div>

        <?php endwhile; ?>

      </div>

      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

    </div>

  </div>

</section>


<!-- ===== CONTACT CTA SECTION ===== -->
<?php
$cta = $conn->query("SELECT * FROM cta_section LIMIT 1")->fetch_assoc();
?>
<section class="cta-section" style="overflow-x:hidden;">

  <div class="cta-bg"
    style="background-image:url('<?= $cta['background_image'] ?>');">
  </div>

  <div class="cta-overlay"></div>

  <div class="container">

    <div class="cta-content" data-aos="zoom-in">

      <div class="cta-icon">
        <i class="<?= $cta['icon'] ?>"></i>
      </div>

      <h2><?= $cta['title'] ?></h2>

      <p><?= $cta['description'] ?></p>

      <div class="cta-btns">

        <a href="<?= $cta['button_link'] ?>" class="btn-cta-white">
          <i class="fas fa-paper-plane"></i>
          <?= $cta['button_text'] ?>
        </a>

        <a href="tel:<?= $cta['phone'] ?>" class="btn-cta-outline">
          <i class="fas fa-phone-alt"></i>
          <?= $cta['phone'] ?>
        </a>

      </div>

      <div class="cta-contact-row">

        <a href="mailto:<?= $cta['email'] ?>">
          <i class="fas fa-envelope"></i>
          <?= $cta['email'] ?>
        </a>


        <span>
          <i class="fas fa-map-marker-alt"></i>
          <?= $cta['location'] ?>
        </span>

      </div>

    </div>

  </div>

</section>

<?php include 'includes/footer.php'; ?>