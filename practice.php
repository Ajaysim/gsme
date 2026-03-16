<?php
$slug = "mining-consultancy";

$serviceQuery = "SELECT * FROM services WHERE slug='$slug' AND status=1";
$service = $conn->query($serviceQuery)->fetch_assoc();

$featuresQuery = "SELECT * FROM service_features 
                  WHERE service_id=".$service['id']." 
                  ORDER BY sort_order ASC";
$features = $conn->query($featuresQuery);
?>

<section class="svc-detail-section" id="<?= $service['slug'] ?>" style="overflow-x:hidden;">
    <div class="container">
        <div class="svc-detail-grid">

            <div class="svc-detail-img" data-aos="fade-right">
                <img src="<?= $service['image'] ?>" alt="<?= $service['service_name'] ?>">
                <div class="svc-detail-img-badge" style="background:<?= $service['badge_color'] ?>">
                    <i class="<?= $service['icon_class'] ?>"></i>
                    <span><?= $service['service_name'] ?></span>
                </div>
            </div>

            <div class="svc-detail-content" data-aos="fade-left">

                <div class="sec-tag">Service 01</div>

                <h2 class="sec-title">
                    <?= $service['short_title'] ?>
                </h2>

                <p class="about-desc">
                    <?= $service['description'] ?>
                </p>

                <div class="svc-features-grid">

                    <?php while($f = $features->fetch_assoc()){ ?>

                    <div class="sf-item">
                        <div class="sf-icon" style="background:<?= $service['badge_color'] ?>18;color:<?= $service['badge_color'] ?>">
                            <i class="<?= $f['icon'] ?>"></i>
                        </div>

                        <div class="sf-text">
                            <h4><?= $f['title'] ?></h4>
                            <p><?= $f['description'] ?></p>
                        </div>
                    </div>

                    <?php } ?>

                </div>

                <a href="../pages/contact.php" class="btn-primary">
                    <i class="fas fa-paper-plane"></i> Get Consultation
                </a>

            </div>
        </div>
    </div>
</section>