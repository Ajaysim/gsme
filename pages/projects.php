<?php  
require_once '../config.php';

?>
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
                <source src="../<?= $p['video'] ?>" type="video/mp4">
              </video>

            <?php else: ?>

              <!-- IMAGE -->
              <img src="<?= $p['image'] ?? '../assets/images/default.jpg' ?>" alt="<?= $p['title'] ?? '' ?>">

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