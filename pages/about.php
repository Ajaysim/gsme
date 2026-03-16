<?php
$pageTitle = "About GSME Enterprises | Mining & Environmental Consultancy";
$pageDescription = "Learn about GSME Enterprises - 24+ years of mining consultancy, environmental compliance and survey services from Bhopal MP.";
include '../includes/header.php';
include '../includes/navbar.php';
?>
<?php
include('../config.php'); // ya db.php
?>



<!-- Page Header -->
<?php

$page = 'about';

$headerImage = 'uploads/about-header.png';

$query = "SELECT header_image FROM about_sec1 WHERE page_name='$page' LIMIT 1";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (!empty($row['header_image'])) {
        $headerImage = $row['header_image'];
    }
}

?>

<section class="page-header"
    style="background-image:url('../assets/<?php echo $headerImage; ?>'); overflow-x:hidden; background-size:cover; background-position:center;">

    <div class="ph-overlay"></div>

    <div class="container">
        <div class="ph-content" data-aos="fade-up">
            <h1>About Us</h1>

            <nav class="breadcrumb">
                <a href="../index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>About</span>
            </nav>
        </div>
    </div>

</section>



<!-- About Intro -->
<!-- <section class="about-intro-section" style="overflow-x:hidden;">
    <div class="container">
        <div class="about-wrapper">
            <div class="about-imgs" data-aos="fade-right">
                <div class="aimg-main">
                    <img src="https://gsmeoneworld.co.in/img/01Home/banner-5.jpg"
                        alt="GSME Mining Operations">
                    <div class="aimg-badge">
                        <div class="ab-num">24<span>+</span></div>
                        <div class="ab-lbl">Years of<br>Excellence</div>
                    </div>
                </div>
                <div class="aimg-small">
                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=320&q=80"
                        alt="Survey Team">
                </div>
            </div>

            <div class="about-content" data-aos="fade-left">
                <div class="sec-tag">Our Story</div>
                <h2 class="sec-title">About <span class="hl">GSME Enterprises</span></h2>
                <p class="about-lead">
                    Bhopal's Premier Mining &amp; Environmental Consultancy Since 2000
                </p>
                <p class="about-desc">
                    GSME Enterprises was established with a vision to provide comprehensive
                    mining and environmental consultancy services to the rapidly growing
                    mining sector of India. Based in Bhopal, Madhya Pradesh.
                </p>
                <p class="about-desc">
                    Over the past 24+ years, we have successfully completed <strong>500+ projects
                        across 18+ states</strong> in India, earning the trust of industry leaders
                    including Coal India Limited, NMDC, MECL, ONGC and Hindustan Copper Limited.
                </p>
                <!-- <p class="about-desc">
                    Our team of experienced geologists, mining engineers, environmental
                    scientists, GIS specialists and drone survey experts work together to
                    deliver end-to-end solutions — from initial geological surveys to
                    final regulatory approvals from MoEF, IBM, MPPCB and state forest departments.
                </p> 

                <div class="about-checklist">
                    <div class="ac-item"><i class="fas fa-check-circle"></i> Licensed Mining Plan Preparers (IBM Registered)</div>
                    <div class="ac-item"><i class="fas fa-check-circle"></i> Accredited Environmental Consultants</div>
                    <div class="ac-item"><i class="fas fa-check-circle"></i> DGPS &amp; Drone Survey Specialists</div>
                    <div class="ac-item"><i class="fas fa-check-circle"></i> GIS &amp; Remote Sensing Professionals</div>
                    <div class="ac-item"><i class="fas fa-check-circle"></i> Forest Clearance Documentation Experts</div>
                    <div class="ac-item"><i class="fas fa-check-circle"></i> Pan-India Project Experience (18+ States)</div>
                </div>

                <div class="about-actions">
                    <a href="../pages/contact.php" class="btn-primary">
                        <i class="fas fa-phone-alt"></i> Get Free Consultation
                    </a>
                    <div class="about-phone">
                        <div class="ap-icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="ap-text">
                            <span>Call Us Anytime</span>
                            <strong>+91 88711 17481</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
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
                    <img src="../<?= $about['image_main'] ?>"
                        alt="GSME Mining Operations">
                    <div class="aimg-badge">
                        <div class="ab-num"><? $about['experience_years'] ?><span>+</span></div>
                        <div class="ab-lbl">Years of<br>Excellence</div>
                    </div>
                </div>
                <div class="aimg-small">
                    <img src="../<?= $about['image_small1'] ?>"
                        alt="Survey Team">
                </div>
                <div class="aimg-small aimg-small-2">
                    <img src="../<?= $about['image_small2'] ?>"
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


<!-- Vision Mission Section -->

<?php

$query = "SELECT * FROM company_vm WHERE status=1 ORDER BY id ASC";
$result = $conn->query($query);

?>
<section class="vm-section" style="overflow-x:hidden;">
    <div class="container">
        <div class="vm-grid">

            <?php
            $delay = 0;

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="vm-card" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                        <div class="vm-icon" style="background:<?php echo $row['color']; ?>;">
                            <i class="<?php echo $row['icon']; ?>"></i>
                        </div>

                        <h3><?php echo $row['title']; ?></h3>

                        <p>
                            <?php echo $row['description']; ?>
                        </p>
                    </div>

            <?php
                    $delay += 150;
                }
            }
            ?>

        </div>
    </div>
</section>


<!-- Why Choose Us - About Page -->
<?php

$queryWhy = "SELECT * FROM what_makes WHERE status=1 ORDER BY id ASC";
$resultWhy = $conn->query($queryWhy);

?>
<section class="about-why-section" style="overflow-x:hidden;">
    <div class="container">

        <div class="sec-header" data-aos="fade-up">
            <div class="sec-tag">Why Choose GSME</div>
            <h2 class="sec-title">What Makes Us <span class="hl">Different</span></h2>
            <p class="sec-sub">
                24 years of delivering excellence in mining consultancy and
                environmental compliance across India
            </p>
        </div>

        <div class="about-why-grid">

            <?php
            if ($resultWhy && $resultWhy->num_rows > 0) {

                $i = 0;

                while ($row = $resultWhy->fetch_assoc()) {

                    $delay = ($i % 3) * 100;
            ?>

                    <div class="awy-card" data-aos="fade-up" data-aos-delay="<?= $delay ?>">

                        <div class="awy-icon"
                            style="background:<?= $row['color'] ?>18; color:<?= $row['color'] ?>">

                            <i class="<?= $row['icon'] ?>"></i>

                        </div>

                        <div class="awy-stat" style="color:<?= $row['color'] ?>">
                            <?= $row['stat'] ?>
                        </div>

                        <h4><?= $row['title'] ?></h4>

                        <p><?= $row['description'] ?></p>

                    </div>

            <?php
                    $i++;
                }
            }
            ?>

        </div>

    </div>
</section>

<!-- Team Section -->
<section class="team-section" style="overflow-x:hidden;">
    <div class="container">

        <div class="sec-header" data-aos="fade-up">
            <div class="sec-tag">Our Team</div>
            <h2 class="sec-title">Meet Our <span class="hl">Expert Team</span></h2>
            <p class="sec-sub">
                Experienced professionals dedicated to delivering excellence in
                mining and environmental consultancy
            </p>
        </div>

        <div class="team-grid">

            <?php
            $query = "SELECT * FROM team_members WHERE status=1 ORDER BY id ASC";
            $result = $conn->query($query);

            $i = 0;
            while ($member = $result->fetch_assoc()) {

                $skills = explode(",", $member['skills']);
            ?>

                <div class="team-card" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">

                    <div class="team-img">
                        <img src="../assets/<?= $member['image'] ?>" alt="<?= $member['name'] ?>">

                        <div class="team-img-overlay">
                            <div class="team-skills">

                                <?php foreach ($skills as $skill): ?>
                                    <span><?= trim($skill) ?></span>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                    <div class="team-info">

                        <div class="team-exp" style="color:<?= $member['color'] ?>">
                            <i class="fas fa-star"></i> <?= $member['experience'] ?>
                        </div>

                        <h3><?= $member['name'] ?></h3>
                        <p><?= $member['role'] ?></p>

                        <div class="team-color-bar" style="background:<?= $member['color'] ?>"></div>

                    </div>

                </div>

            <?php
                $i++;
            }
            ?>

        </div>
    </div>
</section>

<!-- Clients Section -->
<!-- <section class="about-clients-section" style="overflow-x:hidden;">
    <div class="container">
        <div class="sec-header" data-aos="fade-up">
            <div class="sec-tag">Our Clients</div>
            <h2 class="sec-title">Trusted By <span class="hl">Industry Leaders</span></h2>
            <p class="sec-sub">
                We are proud to have served India's leading mining and energy companies
            </p>
        </div>

        <div class="about-clients-grid">
            <?php
            $clients = [
                [
                    'name'  => 'Coal India Limited',
                    'abbr'  => 'CIL',
                    'desc'  => 'India\'s largest coal mining company. We have provided DGPS survey and mining consultancy services for multiple CIL subsidiaries.',
                    'icon'  => 'fas fa-industry',
                    'color' => '#1a1a2e',
                    'projects' => '15+ Projects'
                ],
                [
                    'name'  => 'NMDC Limited',
                    'abbr'  => 'NMDC',
                    'desc'  => 'National Mineral Development Corporation. Environmental compliance and GIS mapping services for iron ore mining projects.',
                    'icon'  => 'fas fa-gem',
                    'color' => '#c84b31',
                    'projects' => '10+ Projects'
                ],
                [
                    'name'  => 'MECL',
                    'abbr'  => 'MECL',
                    'desc'  => 'Mineral Exploration Corporation Limited. Geological survey support and drone-based mapping for mineral exploration blocks.',
                    'icon'  => 'fas fa-mountain',
                    'color' => '#0f3460',
                    'projects' => '8+ Projects'
                ],
                [
                    'name'  => 'ONGC',
                    'abbr'  => 'ONGC',
                    'desc'  => 'Oil and Natural Gas Corporation. Environmental impact assessment and hydrogeological survey services for oil field projects.',
                    'icon'  => 'fas fa-oil-can',
                    'color' => '#533483',
                    'projects' => '12+ Projects'
                ],
                [
                    'name'  => 'Hindustan Copper Limited',
                    'abbr'  => 'HCL',
                    'desc'  => 'India\'s only vertically integrated copper producer. Mining plan preparation and forest clearance support services.',
                    'icon'  => 'fas fa-coins',
                    'color' => '#b45309',
                    'projects' => '6+ Projects'
                ],
            ];
            foreach ($clients as $i => $c): ?>
                <div class="aclient-card" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 100 ?>">
                    <div class="aclient-top" style="border-top: 4px solid <?= $c['color'] ?>">
                        <div class="aclient-icon" style="color:<?= $c['color'] ?>; background:<?= $c['color'] ?>15">
                            <i class="<?= $c['icon'] ?>"></i>
                        </div>
                        <div class="aclient-header">
                            <strong style="color:<?= $c['color'] ?>"><?= $c['abbr'] ?></strong>
                            <span><?= $c['name'] ?></span>
                        </div>
                    </div>
                    <p><?= $c['desc'] ?></p>
                    <div class="aclient-footer">
                        <span class="aclient-proj" style="color:<?= $c['color'] ?>; background:<?= $c['color'] ?>15">
                            <i class="fas fa-hard-hat"></i> <?= $c['projects'] ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> -->
<!-- ///client -sections-trusted-partners -->

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
                            <img src="../<?= $c['logo']; ?>" alt="<?= $c['name']; ?>">
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



<!-- Milestones / Timeline Section -->
<?php

/* Timeline Background Fetch */
$bgQuery = "SELECT bg_image FROM milestones 
            WHERE bg_image IS NOT NULL AND bg_image != '' 
            LIMIT 1";

$bgResult = $conn->query($bgQuery);
$bgRow = $bgResult->fetch_assoc();

$timelineBg = !empty($bgRow['bg_image'])
    ? $bgRow['bg_image']
    : 'uploads/default-bg.jpg';


/* Timeline Data Fetch */

$query = "SELECT * FROM milestones 
          WHERE status=1 
          ORDER BY sort_order ASC";

$result = $conn->query($query);

?>

<section class="timeline-section" style="overflow-x:hidden;">

    <!-- Background Image -->
    <div class="timeline-bg"
        style="background-image:url('../assets/<?php echo $timelineBg; ?>');">
    </div>

    <div class="timeline-overlay"></div>

    <div class="container">

        <div class="sec-header" data-aos="fade-up">
            <div class="sec-tag light">Our Journey</div>
            <h2 class="sec-title light">
                Our <span class="hl-light">Milestones</span>
            </h2>
            <p class="sec-sub light">
                24+ years of growth, excellence and trusted service
            </p>
        </div>

        <div class="timeline">

            <?php
            $i = 0;

            while ($m = $result->fetch_assoc()):
            ?>

                <div class="tl-item <?php echo $i % 2 == 0 ? 'tl-left' : 'tl-right'; ?>"
                    data-aos="<?php echo $i % 2 == 0 ? 'fade-right' : 'fade-left'; ?>">

                    <div class="tl-content">

                        <div class="tl-year">
                            <?php echo $m['year']; ?>
                        </div>

                        <h4>
                            <?php echo $m['title']; ?>
                        </h4>

                        <p>
                            <?php echo $m['description']; ?>
                        </p>

                    </div>

                    <div class="tl-dot"></div>

                </div>

            <?php
                $i++;
            endwhile;
            ?>

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

<!-- CTA Section -->
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

                <span>|</span>

                <span>
                    <i class="fas fa-map-marker-alt"></i>
                    <?= $cta['location'] ?>
                </span>

            </div>

        </div>

    </div>

</section>
<style>
    /* =============================================
   PAGE HEADER (All Inner Pages)
   ============================================= */
    .page-header {
        padding: 120px 0 80px;
        position: relative;
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }

    .ph-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(15, 23, 42, 0.90), rgba(15, 23, 42, 0.75));
    }

    .page-header .container {
        position: relative;
        z-index: 2;
    }

    .ph-content {
        color: var(--white);
    }

    .ph-content h1 {
        font-family: var(--font-head);
        font-size: clamp(32px, 5vw, 56px);
        font-weight: 800;
        margin-bottom: 16px;
    }

    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
    }

    .breadcrumb a {
        color: rgba(255, 255, 255, 0.7);
        transition: var(--transition);
    }

    .breadcrumb a:hover {
        color: var(--primary);
    }

    .breadcrumb i {
        font-size: 11px;
        color: var(--primary);
    }

    .breadcrumb span {
        color: var(--primary);
        font-weight: 600;
    }

    /* =============================================
   ABOUT INTRO SECTION
   ============================================= */
    .about-intro-section {
        padding: 100px 0;
        background: var(--white);
    }

    /* =============================================
   VISION MISSION SECTION
   ============================================= */
    .vm-section {
        padding: 80px 0;
        background: #f8fafc;
    }

    .vm-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .vm-card {
        background: var(--white);
        border-radius: var(--radius-lg);
        padding: 40px 32px;
        text-align: center;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--gray-light);
        transition: var(--transition);
    }

    .vm-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
    }

    .vm-icon {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: var(--white);
        margin: 0 auto 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .vm-card h3 {
        font-family: var(--font-head);
        font-size: 20px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 14px;
    }

    .vm-card p {
        font-size: 15px;
        color: var(--gray);
        line-height: 1.8;
    }

    /* =============================================
   ABOUT WHY SECTION
   ============================================= */
    .about-why-section {
        padding: 100px 0;
        background: var(--white);
    }

    .about-why-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .awy-card {
        background: var(--white);
        border-radius: var(--radius-md);
        padding: 32px 26px;
        border: 1px solid var(--gray-light);
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
    }

    .awy-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-lg);
        border-color: transparent;
    }

    .awy-icon {
        width: 60px;
        height: 60px;
        border-radius: var(--radius-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 14px;
        transition: var(--transition);
    }

    .awy-card:hover .awy-icon {
        transform: scale(1.1);
    }

    .awy-stat {
        font-family: var(--font-head);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .awy-card h4 {
        font-size: 17px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .awy-card p {
        font-size: 14px;
        color: var(--gray);
        line-height: 1.7;
    }

    /* =============================================
   TEAM SECTION
   ============================================= */
    .team-section {
        padding: 100px 0;
        background: #f8fafc;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 28px;
    }

    .team-card {
        background: var(--white);
        border-radius: var(--radius-md);
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--gray-light);
        transition: var(--transition);
    }

    .team-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
    }

    .team-img {
        position: relative;
        height: 260px;
        overflow: hidden;
    }

    .team-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-card:hover .team-img img {
        transform: scale(1.08);
    }

    .team-img-overlay {
        position: absolute;
        inset: 0;
        background: rgba(15, 23, 42, 0.85);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        opacity: 0;
        transition: var(--transition);
    }

    .team-card:hover .team-img-overlay {
        opacity: 1;
    }

    .team-skills {
        display: flex;
        flex-direction: column;
        gap: 8px;
        width: 100%;
    }

    .team-skills span {
        background: rgba(249, 115, 22, 0.2);
        border: 1px solid rgba(249, 115, 22, 0.4);
        color: #fdba74;
        padding: 6px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 600;
        text-align: center;
    }

    .team-info {
        padding: 22px 20px;
    }

    .team-exp {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .team-info h3 {
        font-size: 16px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 6px;
        line-height: 1.3;
    }

    .team-info p {
        font-size: 13px;
        color: var(--gray);
        margin-bottom: 14px;
        line-height: 1.5;
    }

    .team-color-bar {
        height: 3px;
        width: 50px;
        border-radius: 2px;
        transition: width 0.3s ease;
    }

    .team-card:hover .team-color-bar {
        width: 100%;
    }

    /* =============================================
   ABOUT CLIENTS SECTION
   ============================================= */
    .about-clients-section {
        padding: 100px 0;
        background: var(--white);
    }

    .about-clients-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 28px;
    }

    .aclient-card {
        background: var(--white);
        border-radius: var(--radius-md);
        padding: 28px;
        box-shadow: var(--shadow-sm);
        border: 1px solid var(--gray-light);
        transition: var(--transition);
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .aclient-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--shadow-lg);
    }

    .aclient-top {
        display: flex;
        align-items: center;
        gap: 16px;
        padding-top: 8px;
    }

    .aclient-icon {
        width: 56px;
        height: 56px;
        border-radius: var(--radius-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        flex-shrink: 0;
    }

    .aclient-header {
        display: flex;
        flex-direction: column;
    }

    .aclient-header strong {
        font-family: var(--font-head);
        font-size: 22px;
        font-weight: 800;
        line-height: 1;
    }

    .aclient-header span {
        font-size: 13px;
        color: var(--gray);
        font-weight: 500;
    }

    .aclient-card p {
        font-size: 14px;
        color: var(--gray);
        line-height: 1.7;
        flex: 1;
    }

    .aclient-footer {
        margin-top: auto;
    }

    .aclient-proj {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 14px;
        border-radius: 50px;
        font-size: 12px;
        font-weight: 700;
    }

    /* =============================================
   TIMELINE SECTION
   ============================================= */
    .timeline-section {
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .timeline-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .timeline-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgb(15 23 42 / 57%), rgba(15, 23, 42, 0.90));
    }

    .timeline-section .container {
        position: relative;
        z-index: 2;
    }

    .timeline {
        position: relative;
        padding: 20px 0;
        margin-top: 20px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, transparent, var(--primary), transparent);
        transform: translateX(-50%);
    }

    .tl-item {
        display: flex;
        align-items: center;
        margin-bottom: 50px;
        position: relative;
    }

    .tl-left {
        flex-direction: row;
    }

    .tl-right {
        flex-direction: row-reverse;
    }

    .tl-content {
        width: calc(50% - 40px);
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: var(--radius-md);
        padding: 24px 28px;
        color: var(--white);
        transition: var(--transition);
    }

    .tl-content:hover {
        background: rgba(249, 115, 22, 0.1);
        border-color: rgba(249, 115, 22, 0.3);
        transform: scale(1.02);
    }

    .tl-year {
        font-family: var(--font-head);
        font-size: 28px;
        font-weight: 800;
        color: var(--primary);
        margin-bottom: 8px;
        line-height: 1;
    }

    .tl-content h4 {
        font-size: 17px;
        font-weight: 700;
        color: var(--white);
        margin-bottom: 10px;
    }

    .tl-content p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.7;
    }

    .tl-dot {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: var(--primary);
        border: 3px solid var(--white);
        box-shadow: 0 0 20px rgba(249, 115, 22, 0.5);
        z-index: 2;
        flex-shrink: 0;
    }

    /* =============================================
   CONTACT FORM STYLES (contact.php)
   ============================================= */
    .contact-main-section {
        padding: 100px 0;
        background: var(--white);
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.3fr;
        gap: 60px;
        align-items: start;
    }

    .contact-intro {
        font-size: 15.5px;
        color: var(--gray);
        line-height: 1.8;
        margin: 16px 0 32px;
    }

    .contact-info-cards {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-bottom: 32px;
    }

    .ci-card {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        background: #f8fafc;
        border-radius: var(--radius-md);
        padding: 20px 22px;
        border: 1px solid var(--gray-light);
        transition: var(--transition);
    }

    .ci-card:hover {
        background: rgba(249, 115, 22, 0.05);
        border-color: rgba(249, 115, 22, 0.2);
        transform: translateX(4px);
    }

    .ci-icon {
        width: 48px;
        height: 48px;
        border-radius: var(--radius-sm);
        background: rgba(249, 115, 22, 0.1);
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
    }

    .ci-body h4 {
        font-size: 15px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 4px;
    }

    .ci-body p {
        font-size: 14px;
        color: var(--gray);
        line-height: 1.6;
    }

    .ci-body a {
        color: var(--primary);
        font-weight: 600;
        transition: var(--transition);
    }

    .ci-body a:hover {
        color: var(--primary-dark);
    }

    .ci-body small {
        font-size: 12px;
        color: var(--gray);
    }

    .contact-socials {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    .contact-socials span {
        font-size: 14px;
        color: var(--gray);
        font-weight: 500;
    }

    .cs-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: var(--white);
        transition: var(--transition);
    }

    .cs-btn:hover {
        transform: translateY(-3px) scale(1.1);
        color: var(--white);
    }

    .cs-btn.fb {
        background: #1877f2;
    }

    .cs-btn.li {
        background: #0077b5;
    }

    .cs-btn.wa {
        background: #25D366;
    }

    /* Contact Form Box */
    .contact-form-box {
        background: var(--white);
        border-radius: var(--radius-lg);
        padding: 40px;
        box-shadow: var(--shadow-lg);
        border: 1px solid var(--gray-light);
    }

    .contact-form-box h3 {
        font-family: var(--font-head);
        font-size: 24px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 6px;
    }

    .contact-form-box>p {
        font-size: 15px;
        color: var(--gray);
        margin-bottom: 28px;
    }

    /* Form Elements */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 7px;
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 13.5px;
        font-weight: 600;
        color: var(--secondary);
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .form-group label i {
        color: var(--primary);
        font-size: 12px;
    }

    .form-control {
        padding: 13px 16px;
        border: 2px solid var(--gray-light);
        border-radius: var(--radius-sm);
        font-size: 14.5px;
        font-family: var(--font-main);
        color: var(--secondary);
        background: #f8fafc;
        transition: var(--transition);
        width: 100%;
        outline: none;
        -webkit-appearance: none;
    }

    .form-control:focus {
        border-color: var(--primary);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.1);
    }

    .form-control.input-error {
        border-color: #ef4444;
        background: #fef2f2;
    }

    .form-control::placeholder {
        color: #94a3b8;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 130px;
    }

    select.form-control {
        cursor: pointer;
    }

    .field-error {
        font-size: 12px;
        color: #ef4444;
        display: flex;
        align-items: center;
        gap: 4px;
        margin-top: 2px;
    }

    .form-submit-btn {
        width: 100%;
        padding: 15px 32px;
        background: var(--gradient);
        color: var(--white);
        border: none;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 700;
        font-family: var(--font-main);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: var(--transition);
        box-shadow: 0 4px 20px rgba(249, 115, 22, 0.35);
        margin-top: 8px;
    }

    .form-submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(249, 115, 22, 0.5);
    }

    /* Form Success */
    .form-success {
        display: none;
        align-items: center;
        gap: 14px;
        background: #f0fdf4;
        border: 1px solid #86efac;
        border-radius: var(--radius-md);
        padding: 16px 20px;
        margin-bottom: 24px;
    }

    .form-success i {
        font-size: 28px;
        color: #22c55e;
        flex-shrink: 0;
    }

    .form-success div {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }

    .form-success strong {
        font-size: 15px;
        color: #166534;
    }

    .form-success span {
        font-size: 13px;
        color: #15803d;
    }

    /* Map Section */


    .map-wrapper iframe {
        display: block;
        width: 100%;
        border: none;
        filter: grayscale(20%);
    }

    /* =============================================
   RESPONSIVE - ABOUT & CONTACT PAGE
   ============================================= */
    @media (max-width: 1100px) {
        .team-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .about-clients-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .contact-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }

    @media (max-width: 900px) {
        .vm-grid {
            grid-template-columns: 1fr;
        }

        .about-why-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .timeline::before {
            left: 20px;
        }

        .tl-item,
        .tl-right {
            flex-direction: row;
        }

        .tl-content {
            width: calc(100% - 60px);
            margin-left: 40px;
        }

        .tl-dot {
            left: 20px;
            transform: translateX(-50%);
        }
    }

    @media (max-width: 640px) {
        .vm-grid {
            grid-template-columns: 1fr;
        }

        .about-why-grid {
            grid-template-columns: 1fr;
        }

        .team-grid {
            grid-template-columns: 1fr;
        }

        .about-clients-grid {
            grid-template-columns: 1fr;
        }

        .contact-form-box {
            padding: 24px 18px;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .tl-content {
            padding: 18px 20px;
        }

        .tl-year {
            font-size: 22px;
        }
    }
</style>

<?php include '../includes/footer.php'; ?>