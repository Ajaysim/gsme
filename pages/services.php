<?php
$pageTitle = "Our Services | GSME Enterprises - Mining & Environmental Consultancy";
$pageDescription = "GSME Enterprises offers Mining Consultancy, EIA, Pollution Control, DGPS Survey, Drone Mapping, GIS, Hydrogeology and Forest Clearance services.";
include '../includes/header.php';
include '../includes/navbar.php';
?>
<?php
require_once '../config.php';
?>
<!-- Page Header -->
<?php
$page_slug = "services";

$query = "SELECT * FROM page_headers 
          WHERE page_slug='$page_slug' AND status=1 
          LIMIT 1";

$result = $conn->query($query);
$header = $result->fetch_assoc();
?>
<section class="page-header"
    style="background-image:url('../assets/<?= $header['background_image'] ?>');overflow-x:hidden;">
    <div class="ph-overlay"></div>
    <div class="container">
        <div class="ph-content" data-aos="fade-up">
            <h1><?= htmlspecialchars($header['title']) ?></h1>
            <nav class="breadcrumb">
                <a href="../index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span><?= htmlspecialchars($header['title']) ?></span>
            </nav>
        </div>
    </div>
</section>




<!-- Services Intro -->
<?php
$introQuery = "SELECT * FROM services_intro WHERE status=1 LIMIT 1";
$introResult = $conn->query($introQuery);
$intro = $introResult->fetch_assoc();
?>
<section class="svc-intro-section" style="overflow-x:hidden;">
    <div class="container">
        <div class="svc-intro-grid">

            <div class="svc-intro-left" data-aos="fade-right">

                <div class="sec-tag">
                    <?= htmlspecialchars($intro['tagline']) ?>
                </div>

                <h2 class="sec-title">
                    <?= htmlspecialchars($intro['title']) ?><br>
                    <span class="hl">
                        <?= htmlspecialchars($intro['highlight']) ?>
                    </span>
                </h2>

                <p class="about-desc">
                    <?= htmlspecialchars($intro['description1']) ?>
                </p>

                <p class="about-desc">
                    <?= htmlspecialchars($intro['description2']) ?>
                </p>

                <div class="svc-intro-stats">

                    <div class="sis-item">
                        <strong><?= $intro['projects_done'] ?></strong>
                        <span>Projects Done</span>
                    </div>

                    <div class="sis-sep"></div>

                    <div class="sis-item">
                        <strong><?= $intro['states_covered'] ?></strong>
                        <span>States Covered</span>
                    </div>

                    <div class="sis-sep"></div>

                    <div class="sis-item">
                        <strong><?= $intro['years_experience'] ?></strong>
                        <span>Years Experience</span>
                    </div>

                </div>
            </div>

            <div class="svc-intro-right" data-aos="fade-left">
                <div class="svc-intro-img-wrap">

                    <img src="<?= $intro['image'] ?>" alt="GSME Mining Services">

                    <div class="svc-intro-badge">
                        <i class="fas fa-award"></i>
                        <div>
                            <strong><?= $intro['years_experience'] ?> Years</strong>
                            <span>Expert Service</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- Services Nav Tabs -->
<?php
$serviceQuery = "SELECT * FROM service_master WHERE status=1 ORDER BY sort_order";
$serviceResult = $conn->query($serviceQuery);
?>

<section class="svc-tabs-section">
    <div class="container">
        <div class="svc-tabs-nav">

            <?php $i = 0;
            while ($service = $serviceResult->fetch_assoc()) { ?>
                <a href="#<?= htmlspecialchars($service['slug']) ?>" class="stab <?= ($i == 0 ? 'active' : '') ?>">
                    <i class="<?= htmlspecialchars($service['icon_class']) ?>"></i>
                    <?= htmlspecialchars($service['short_title']) ?> </a> <?php $i++;
                     } ?>
            <!-- Projects Tab -->
            <a href="#projects" class="stab">
                <i class="fas fa-project-diagram"></i> Projects </a>

        </div>
    </div>
</section>

<?php
$serviceQuery = "SELECT * FROM service_master WHERE status=1 ORDER BY sort_order";
$services = $conn->query($serviceQuery);
$serviceNumber = 1;

while ($service = $services->fetch_assoc()) {

    $features = $conn->query("SELECT * FROM service_master_features
WHERE service_id=" . $service['id'] . " ORDER BY sort_order");

    $altClass = ($serviceNumber % 2 == 0) ? "svc-alt-bg" : "";
    $reverse = ($serviceNumber % 2 == 0) ? "svc-detail-reverse" : "";
?>

    <section class="svc-detail-section <?= $altClass ?>" id="<?= $service['slug'] ?>">

        <div class="container">

            <div class="svc-detail-grid <?= $reverse ?>">

                <div class="svc-detail-img">

                    <img src="../<?= $service['image'] ?>">

                    <div class="svc-detail-img-badge"
                        style="background:<?= $service['badge_color'] ?>">

                        <i class="<?= $service['icon_class'] ?>"></i>
                        <span><?= $service['service_name'] ?></span>

                    </div>

                </div>

                <div class="svc-detail-content">

                    <div class="sec-tag">Service <?= $serviceNumber ?></div>

                    <h2 class="sec-title"><?= $service['service_name'] ?></h2>

                    <p class="about-desc"><?= $service['description'] ?></p>

                    <div class="svc-features-grid">

                        <?php while ($f = $features->fetch_assoc()) { ?>

                            <div class="sf-item">

                                <div class="sf-icon"
                                    style="background:<?= $service['badge_color'] ?>18;color:<?= $service['badge_color'] ?>">

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

<?php $serviceNumber++;
} ?>

<!-- Projects Section -->

<?php
require_once './projects.php';
?>


<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-bg"
        style="background-image:url('https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?w=1920&q=80');overflow-x:hidden;">
    </div>
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <div class="cta-icon"><i class="fas fa-hard-hat"></i></div>
            <h2>Need Any Of These Services?</h2>
            <p>
                Contact our expert team today for a free consultation.
                We handle everything from survey to regulatory approval.
            </p>
            <div class="cta-btns">
                <a href="../pages/contact.php" class="btn-cta-white">
                    <i class="fas fa-paper-plane"></i> Get Free Consultation
                </a>
                <a href="tel:+918871117481" class="btn-cta-outline">
                    <i class="fas fa-phone-alt"></i> +91 88711 17481
                </a>
            </div>
            <div class="cta-contact-row">
                <a href="mailto:gsmeoneworld@gmail.com">
                    <i class="fas fa-envelope"></i> gsmeoneworld@gmail.com
                </a>
                <span>|</span>
                <span>
                    <i class="fas fa-map-marker-alt"></i> Bhopal, Madhya Pradesh
                </span>
            </div>
        </div>
    </div>
</section>
<style>
    /* =============================================
   SERVICES PAGE STYLES
   ============================================= */

    /* Services Intro Section */
    .svc-intro-section {
        padding: 100px 0;
        background: var(--white);
    }

    .svc-intro-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 70px;
        align-items: center;
    }

    .svc-intro-stats {
        display: flex;
        align-items: center;
        gap: 28px;
        margin-top: 32px;
        padding: 24px 28px;
        background: #f8fafc;
        border-radius: var(--radius-md);
        border: 1px solid var(--gray-light);
    }

    .sis-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .sis-item strong {
        font-family: var(--font-head);
        font-size: 32px;
        font-weight: 800;
        color: var(--primary);
        line-height: 1;
    }

    .sis-item span {
        font-size: 13px;
        color: var(--gray);
        font-weight: 500;
        margin-top: 4px;
    }

    .sis-sep {
        width: 1px;
        height: 50px;
        background: var(--gray-light);
        flex-shrink: 0;
    }

    .svc-intro-img-wrap {
        position: relative;
        border-radius: var(--radius-lg);
        overflow: visible;
    }

    .svc-intro-img-wrap img {
        width: 100%;
        height: 480px;
        object-fit: cover;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
    }

    .svc-intro-badge {
        position: absolute;
        bottom: -20px;
        left: 30px;
        background: var(--white);
        border-radius: var(--radius-md);
        padding: 16px 22px;
        display: flex;
        align-items: center;
        gap: 12px;
        box-shadow: var(--shadow-md);
    }

    .svc-intro-badge i {
        font-size: 28px;
        color: var(--primary);
    }

    .svc-intro-badge div {
        display: flex;
        flex-direction: column;
    }

    .svc-intro-badge strong {
        font-size: 17px;
        font-weight: 800;
        color: var(--dark);
        line-height: 1.2;
    }

    .svc-intro-badge span {
        font-size: 12px;
        color: var(--gray);
    }

    /* Services Tab Nav */
    .svc-tabs-section {
        padding: 0;
        background: var(--white);
        position: sticky;
        top: 72px;
        z-index: 99;
        border-bottom: 2px solid var(--gray-light);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .svc-tabs-nav {
        display: flex;
        align-items: center;
        gap: 0;
        overflow-x: auto;
        scrollbar-width: none;
    }

    .svc-tabs-nav::-webkit-scrollbar {
        display: none;
    }

    .stab {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 16px 22px;
        font-size: 13.5px;
        font-weight: 600;
        color: var(--gray);
        border-bottom: 3px solid transparent;
        transition: var(--transition);
        white-space: nowrap;
        cursor: pointer;
    }

    .stab:hover,
    .stab.active {
        color: var(--primary);
        border-bottom-color: var(--primary);
        background: rgba(249, 115, 22, 0.04);
    }

    .stab i {
        font-size: 14px;
    }

    /* Service Detail Sections */
    .svc-detail-section {
        padding: 100px 0;
        background: var(--white);
    }

    .svc-alt-bg {
        background: #f8fafc;
    }

    .svc-detail-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 70px;
        align-items: center;
    }

    .svc-detail-reverse {
        direction: rtl;
    }

    .svc-detail-reverse>* {
        direction: ltr;
    }

    .svc-detail-img {
        position: relative;
        border-radius: var(--radius-lg);
        overflow: visible;
    }

    .svc-detail-img img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
        transition: transform 0.5s ease;
    }

    .svc-detail-img:hover img {
        transform: scale(1.02);
    }

    .svc-detail-img-badge {
        position: absolute;
        bottom: -18px;
        right: 24px;
        border-radius: var(--radius-md);
        padding: 13px 22px;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: var(--shadow-md);
        color: var(--white);
    }

    .svc-detail-img-badge i {
        font-size: 20px;
    }

    .svc-detail-img-badge span {
        font-size: 14px;
        font-weight: 700;
        white-space: nowrap;
    }

    /* Service Features Grid */
    .svc-features-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
        margin: 28px 0 32px;
    }

    .sf-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 18px 16px;
        background: var(--white);
        border-radius: var(--radius-md);
        border: 1px solid var(--gray-light);
        transition: var(--transition);
    }

    .svc-alt-bg .sf-item {
        background: var(--white);
    }

    .sf-item:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
        border-color: transparent;
    }

    .sf-icon {
        width: 44px;
        height: 44px;
        border-radius: var(--radius-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
        transition: var(--transition);
    }

    .sf-item:hover .sf-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .sf-text h4 {
        font-size: 14px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 4px;
        line-height: 1.3;
    }

    .sf-text p {
        font-size: 13px;
        color: var(--gray);
        line-height: 1.6;
    }

    /* =============================================
   RESPONSIVE - SERVICES PAGE
   ============================================= */
    @media (max-width: 1100px) {
        .svc-intro-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .svc-detail-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .svc-detail-reverse {
            direction: ltr;
        }

        .svc-detail-img img {
            height: 380px;
        }
    }

    @media (max-width: 768px) {
        .svc-features-grid {
            grid-template-columns: 1fr;
        }

        .svc-detail-img img {
            height: 300px;
        }

        .svc-tabs-nav {
            justify-content: flex-start;
        }

        .stab {
            padding: 13px 16px;
            font-size: 12.5px;
        }

        .svc-intro-stats {
            flex-wrap: wrap;
            justify-content: center;
        }

        .sis-sep {
            display: none;
        }
    }

    @media (max-width: 640px) {
        .svc-detail-section {
            padding: 70px 0;
        }

        .svc-intro-img-wrap img {
            height: 280px;
        }

        .svc-detail-img-badge {
            right: 12px;
            padding: 10px 16px;
        }

        .svc-detail-img-badge span {
            font-size: 12px;
        }

        .sf-item {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>

<?php include '../includes/footer.php'; ?>