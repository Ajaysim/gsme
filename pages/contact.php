<?php
$pageTitle = "Contact Us | GSME Enterprises - Mining Consultancy Bhopal";
$pageDescription = "Contact GSME Enterprises for mining consultancy, environmental clearance, DGPS survey and drone mapping services. Based in Bhopal MP.";
include '../includes/header.php';
include '../includes/navbar.php';
?>
<?php
require_once '../config.php';
?>

<!-- Page Header -->
<?php
$query = "SELECT * FROM contact_page_header WHERE status=1 LIMIT 1";
$result = $conn->query($query);
$header = $result->fetch_assoc();
?>

<section class="page-header"
    style="background-image:url('../<?= $header['background_image'] ?>');overflow-x:hidden;">

    <div class="ph-overlay"></div>

    <div class="container">
        <div class="ph-content" data-aos="fade-up">

            <h1><?= $header['page_title'] ?></h1>

            <nav class="breadcrumb">
                <a href="../index.php">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span><?= $header['breadcrumb_title'] ?></span>
            </nav>

        </div>
    </div>

</section>

<!-- Contact Section -->
<section class="contact-main-section" style="overflow-x:hidden;">
    <div class="container">
        <div class="contact-grid">

            <?php
            $query = "SELECT * FROM contact_info WHERE status=1 LIMIT 1";
            $result = $conn->query($query);
            $contact = $result->fetch_assoc();
            ?>

            <!-- Contact Info -->
            <div class="contact-info-col" data-aos="fade-right">

                <div class="sec-tag"><?= $contact['tag'] ?></div>

                <h2 class="sec-title">
                    <?= $contact['title'] ?><br>
                    <span class="hl"><?= $contact['highlight'] ?></span>
                </h2>

                <p class="contact-intro">
                    <?= $contact['intro_text'] ?>
                </p>

                <div class="contact-info-cards">

                    <div class="ci-card">
                        <div class="ci-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="ci-body">
                            <h4>Our Office</h4>
                            <p><?= $contact['office_address'] ?></p>
                        </div>
                    </div>

                    <div class="ci-card">
                        <div class="ci-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="ci-body">
                            <h4>Phone Number</h4>
                            <p>
                                <a href="tel:<?= $contact['phone'] ?>"><?= $contact['phone'] ?></a><br>
                                <small>Mon–Sat: 9:00 AM – 6:00 PM</small>
                            </p>
                        </div>
                    </div>

                    <div class="ci-card">
                        <div class="ci-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="ci-body">
                            <h4>Email Address</h4>
                            <!-- <p>
                                <a href="mailto:<?= $contact['email'] ?>"><?= $contact['email'] ?></a><br>
                                <small>We reply within 24 hours</small>
                            </p> -->
                        </div>
                    </div>

                    <div class="ci-card">
                        <div class="ci-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="ci-body">
                            <h4>WhatsApp</h4>
                            <p>
                                <a href="https://wa.me/<?= $contact['whatsapp'] ?>" target="_blank">
                                    <?= $contact['phone'] ?>
                                </a><br>
                                <small>Chat directly with our team</small>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="contact-socials">
                    <span>Follow us on:</span>

                    <a href="<?= $contact['facebook_link'] ?>" class="cs-btn fb">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="<?= $contact['linkedin_link'] ?>" class="cs-btn li">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="https://wa.me/<?= $contact['whatsapp'] ?>" class="cs-btn wa">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </div>

            </div>

            <!-- Contact Form -->
            <div class="contact-form-col" data-aos="fade-left">
                <div class="contact-form-box">
                    <h3>Send Us a Message</h3>
                    <p>Fill in the details below and we'll get back to you shortly.</p>

                    <!-- Success Message -->
                    <div class="form-success" id="formSuccess">
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Message Sent Successfully!</strong>
                            <span>We'll contact you within 24 hours.</span>
                        </div>
                    </div>

                    <form  action="../save_contact.php" method="POST" class="gsme-form">

                        <div class="form-row">

                            <div class="form-group">
                                <label for="name">
                                    <i class="fas fa-user"></i> Full Name *
                                </label>
                                <input type="text" id="name" name="name"
                                    class="form-control"
                                    placeholder="Enter your full name"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    <i class="fas fa-envelope"></i> Email Address *
                                </label>
                                <input type="email" id="email" name="email"
                                    class="form-control"
                                    placeholder="Enter your email"
                                    required>
                            </div>

                        </div>


                        <div class="form-row">

                            <div class="form-group">
                                <label for="phone">
                                    <i class="fas fa-phone"></i> Phone Number *
                                </label>
                                <input type="tel" id="phone" name="phone"
                                    class="form-control"
                                    placeholder="Enter 10-digit mobile number"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="company">
                                    <i class="fas fa-building"></i> Company Name
                                </label>
                                <input type="text" id="company" name="company"
                                    class="form-control"
                                    placeholder="Your company name">
                            </div>

                        </div>


                        <div class="form-group">

                            <label for="service">
                                <i class="fas fa-cogs"></i> Service Required *
                            </label>

                            <select id="service" name="service" class="form-control" required>

                                <option value="">-- Select a Service --</option>
                                <option value="Mining Consultancy">Mining Consultancy</option>
                                <option value="Environmental Compliance & EIA">Environmental Compliance & EIA</option>
                                <option value="Pollution Control Documentation">Pollution Control Documentation</option>
                                <option value="DGPS Survey">DGPS Survey</option>
                                <option value="Drone Survey & Mapping">Drone Survey & Mapping</option>
                                <option value="GIS & Remote Sensing">GIS & Remote Sensing</option>
                                <option value="Hydrogeology Survey">Hydrogeology Survey</option>
                                <option value="Forest Clearance Assistance">Forest Clearance Assistance</option>
                                <option value="Geo Technical Investigation">Geo Technical Investigation</option>
                                <option value="Other">Other</option>

                            </select>

                        </div>


                        <div class="form-group">

                            <label for="project-location">
                                <i class="fas fa-map-marker-alt"></i> Project Location
                            </label>

                            <input type="text" id="project-location"
                                name="project_location"
                                class="form-control"
                                placeholder="State / District of project site">

                        </div>


                        <div class="form-group">

                            <label for="message">
                                <i class="fas fa-comment-alt"></i> Message *
                            </label>

                            <textarea id="message"
                                name="message"
                                class="form-control"
                                rows="5"
                                placeholder="Describe your project requirement in brief..."
                                required></textarea>

                        </div>


                        <button type="submit" class="form-submit-btn">

                            <i class="fas fa-paper-plane"></i>
                            Send Message

                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<section class="map-section" style="overflow-x:hidden;">
    <div class="map-wrapper">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.3942040779665!2d77.4289!3d23.2156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c43e2a6f13085%3A0x9faa6f0fce2b4a36!2sArera%20Colony%2C%20Bhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1700000000000"
            width="100%"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="GSME Enterprises Location - Bhopal MP">
        </iframe>
    </div>
</section>
<style>
    /* =============================================
   CONTACT PAGE - COMPLETE CSS
   ============================================= */

    /* Page Header (already defined but ensuring) */
    .page-header {
        padding: 140px 0 80px;
        position: relative;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
    }

    .ph-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg,
                rgba(15, 23, 42, 0.93) 0%,
                rgba(15, 23, 42, 0.75) 100%);
    }

    .page-header .container {
        position: relative;
        z-index: 2;
    }

    .ph-content h1 {
        font-family: var(--font-head);
        font-size: clamp(34px, 5vw, 58px);
        font-weight: 800;
        color: var(--white);
        margin-bottom: 16px;
        line-height: 1.2;
    }

    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
        color: rgba(255, 255, 255, 0.7);
        flex-wrap: wrap;
    }

    .breadcrumb a {
        color: rgba(255, 255, 255, 0.7);
        transition: var(--transition);
    }

    .breadcrumb a:hover {
        color: var(--primary);
    }

    .breadcrumb i {
        font-size: 10px;
        color: var(--primary);
    }

    .breadcrumb span {
        color: var(--primary);
        font-weight: 600;
    }

    /* =============================================
   CONTACT MAIN SECTION
   ============================================= */
    .contact-main-section {
        padding: 100px 0;
        background: var(--white);
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.4fr;
        gap: 70px;
        align-items: start;
    }

    /* =============================================
   CONTACT INFO COLUMN
   ============================================= */
    .contact-info-col .sec-tag {
        margin-bottom: 12px;
    }

    .contact-info-col .sec-title {
        margin-bottom: 16px;
        line-height: 1.2;
    }

    .contact-intro {
        font-size: 15.5px;
        color: var(--gray);
        line-height: 1.85;
        margin-bottom: 36px;
    }

    /* Info Cards */
    .contact-info-cards {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-bottom: 36px;
    }

    .ci-card {
        display: flex;
        align-items: flex-start;
        gap: 18px;
        background: #f8fafc;
        border-radius: var(--radius-md);
        padding: 20px 22px;
        border: 1px solid var(--gray-light);
        transition: var(--transition);
        cursor: default;
    }

    .ci-card:hover {
        background: rgba(249, 115, 22, 0.04);
        border-color: rgba(249, 115, 22, 0.25);
        transform: translateX(5px);
        box-shadow: var(--shadow-sm);
    }

    .ci-icon {
        width: 50px;
        height: 50px;
        border-radius: var(--radius-sm);
        background: rgba(249, 115, 22, 0.1);
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        flex-shrink: 0;
        transition: var(--transition);
    }

    .ci-card:hover .ci-icon {
        background: var(--primary);
        color: var(--white);
        transform: scale(1.1);
    }

    .ci-body {
        flex: 1;
    }

    .ci-body h4 {
        font-size: 15px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 5px;
        line-height: 1.3;
    }

    .ci-body p {
        font-size: 14px;
        color: var(--gray);
        line-height: 1.7;
        margin: 0;
    }

    .ci-body a {
        color: var(--primary);
        font-weight: 600;
        transition: var(--transition);
    }

    .ci-body a:hover {
        color: var(--primary-dark);
        text-decoration: underline;
    }

    .ci-body small {
        display: block;
        font-size: 12px;
        color: #94a3b8;
        margin-top: 3px;
    }

    /* Social Links */
    .contact-socials {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
        padding-top: 8px;
    }

    .contact-socials>span {
        font-size: 14px;
        color: var(--gray);
        font-weight: 500;
    }

    .cs-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        color: var(--white);
        transition: var(--transition);
        flex-shrink: 0;
    }

    .cs-btn:hover {
        transform: translateY(-4px) scale(1.12);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        color: var(--white);
    }

    .cs-btn.fb {
        background: #1877f2;
    }

    .cs-btn.fb:hover {
        background: #1557b0;
    }

    .cs-btn.li {
        background: #0077b5;
    }

    .cs-btn.li:hover {
        background: #005885;
    }

    .cs-btn.wa {
        background: #25D366;
    }

    .cs-btn.wa:hover {
        background: #128C7E;
    }

    /* =============================================
   CONTACT FORM COLUMN
   ============================================= */


    .contact-form-box {
        background: var(--white);
        border-radius: var(--radius-lg);
        padding: 44px 42px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--gray-light);
        position: relative;
        overflow: hidden;
    }

    .contact-form-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--gradient);
    }

    .contact-form-box h3 {
        font-family: var(--font-head);
        font-size: 24px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 6px;
        line-height: 1.3;
    }

    .contact-form-box>p {
        font-size: 15px;
        color: var(--gray);
        margin-bottom: 28px;
        line-height: 1.6;
    }

    /* =============================================
   FORM SUCCESS MESSAGE
   ============================================= */
    .form-success {
        display: none;
        align-items: center;
        gap: 16px;
        background: #f0fdf4;
        border: 1px solid #86efac;
        border-radius: var(--radius-md);
        padding: 18px 22px;
        margin-bottom: 28px;
        animation: fadeInUp 0.4s ease;
    }

    .form-success i {
        font-size: 32px;
        color: #22c55e;
        flex-shrink: 0;
    }

    .form-success div {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .form-success strong {
        font-size: 15px;
        font-weight: 700;
        color: #166534;
    }

    .form-success span {
        font-size: 13px;
        color: #15803d;
    }

    /* =============================================
   FORM ELEMENTS
   ============================================= */


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
        cursor: pointer;
    }

    .form-group label i {
        color: var(--primary);
        font-size: 12px;
        width: 14px;
    }

    /* Input / Select / Textarea */
    .form-control {
        padding: 13px 16px;
        border: 2px solid #e2e8f0;
        border-radius: var(--radius-sm);
        font-size: 14.5px;
        font-family: var(--font-main);
        color: var(--secondary);
        background: #f8fafc;
        transition: var(--transition);
        width: 100%;
        outline: none;
        -webkit-appearance: none;
        appearance: none;
        line-height: 1.5;
    }

    .form-control:focus {
        border-color: var(--primary);
        background: var(--white);
        box-shadow: 0 0 0 4px rgba(249, 115, 22, 0.08);
    }

    .form-control:hover:not(:focus) {
        border-color: #cbd5e1;
    }

    .form-control.input-error {
        border-color: #ef4444;
        background: #fef2f2;
        box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.08);
    }

    .form-control::placeholder {
        color: #94a3b8;
        font-size: 14px;
    }

    /* Select specific */
    select.form-control {
        cursor: pointer;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%2364748b' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        padding-right: 40px;
    }

    select.form-control:focus {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23f97316' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
    }

    /* Textarea */
    textarea.form-control {
        resize: vertical;
        min-height: 140px;
        max-height: 300px;
        line-height: 1.7;
    }

    /* Field Error */
    .field-error {
        font-size: 12px;
        color: #ef4444;
        display: flex;
        align-items: center;
        gap: 5px;
        margin-top: 2px;
        animation: fadeInDown 0.3s ease;
    }

    .field-error::before {
        content: '\f071';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        font-size: 11px;
    }

    /* Submit Button */
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
        position: relative;
        overflow: hidden;
    }

    .form-submit-btn::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg,
                rgba(255, 255, 255, 0.15),
                transparent);
        opacity: 0;
        transition: var(--transition);
    }

    .form-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 32px rgba(249, 115, 22, 0.5);
    }

    .form-submit-btn:hover::before {
        opacity: 1;
    }

    .form-submit-btn:active {
        transform: translateY(-1px);
    }

    .form-submit-btn i {
        font-size: 16px;
    }

    /* Button Loader */
    .btn-loader {
        width: 18px;
        height: 18px;
        border: 2px solid rgba(255, 255, 255, 0.4);
        border-top-color: var(--white);
        border-radius: 50%;
        display: none;
        animation: spin 0.7s linear infinite;
    }

    .form-submit-btn.loading .btn-loader {
        display: block;
    }

    .form-submit-btn.loading .fa-paper-plane {
        display: none;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    /* =============================================
   MAP SECTION
   ============================================= */
    .map-section {
        position: relative;
    }

    .map-wrapper {
        position: relative;
        overflow: hidden;
    }

    .map-wrapper iframe {
        display: block;
        width: 100%;
        height: 480px;
        border: none;
        filter: saturate(0.85) contrast(1.05);
        transition: filter 0.3s ease;
    }

    .map-wrapper:hover iframe {
        filter: saturate(1) contrast(1);
    }

    /* Map Overlay Info Box */
    .map-info-box {
        position: absolute;
        top: 30px;
        left: 50px;
        background: var(--white);
        border-radius: var(--radius-md);
        padding: 24px 28px;
        box-shadow: var(--shadow-lg);
        border-left: 4px solid var(--primary);
        z-index: 10;
        min-width: 260px;
    }

    .map-info-box h4 {
        font-family: var(--font-head);
        font-size: 17px;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .map-info-box h4 i {
        color: var(--primary);
    }

    .map-info-box p {
        font-size: 14px;
        color: var(--gray);
        line-height: 1.7;
        margin-bottom: 14px;
    }

    .map-info-box a {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-size: 13px;
        font-weight: 600;
        color: var(--primary);
        transition: var(--transition);
    }

    .map-info-box a:hover {
        color: var(--primary-dark);
        gap: 10px;
    }

    /* =============================================
   CONTACT PAGE - EXTRA INFO STRIP
   ============================================= */
    .contact-strip {
        background: var(--dark);
        padding: 28px 0;
    }

    .contact-strip-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
    }

    .cs-strip-item {
        display: flex;
        align-items: center;
        gap: 14px;
        color: rgba(255, 255, 255, 0.8);
    }

    .cs-strip-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: rgba(249, 115, 22, 0.2);
        border: 1px solid rgba(249, 115, 22, 0.4);
        color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        flex-shrink: 0;
    }

    .cs-strip-text {
        display: flex;
        flex-direction: column;
    }

    .cs-strip-text span {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.5);
        font-weight: 500;
        margin-bottom: 2px;
    }

    .cs-strip-text strong {
        font-size: 15px;
        color: var(--white);
        font-weight: 600;
    }

    .cs-strip-text a {
        color: var(--white);
        font-size: 15px;
        font-weight: 600;
        transition: var(--transition);
    }

    .cs-strip-text a:hover {
        color: var(--primary);
    }

    .cs-strip-divider {
        width: 1px;
        height: 50px;
        background: rgba(255, 255, 255, 0.1);
        flex-shrink: 0;
    }

    /* =============================================
   CONTACT PAGE RESPONSIVE
   ============================================= */

    /* Tablet */
    @media (max-width: 1100px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .contact-form-box {
            padding: 36px 32px;
        }

        .map-info-box {
            top: 20px;
            left: 20px;
            min-width: 220px;
        }

        .contact-strip-inner {
            justify-content: center;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .contact-main-section {
            padding: 70px 0;
        }

        .contact-form-box {
            padding: 28px 22px;
        }

        .contact-form-box h3 {
            font-size: 20px;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .ci-card {
            padding: 16px 18px;
        }

        .ci-icon {
            width: 44px;
            height: 44px;
            font-size: 18px;
        }

        .map-info-box {
            display: none;
        }

        .map-wrapper iframe {
            height: 360px;
        }

        .contact-strip-inner {
            flex-direction: column;
            align-items: flex-start;
        }

        .cs-strip-divider {
            display: none;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .contact-main-section {
            padding: 50px 0;
        }

        .contact-form-box {
            padding: 22px 16px;
            border-radius: var(--radius-md);
        }

        .form-control {
            padding: 11px 13px;
            font-size: 14px;
        }

        .form-submit-btn {
            padding: 14px 24px;
            font-size: 15px;
        }

        .ci-card {
            flex-direction: column;
            gap: 12px;
            padding: 16px;
        }

        .contact-socials {
            gap: 10px;
        }

        .cs-btn {
            width: 38px;
            height: 38px;
            font-size: 14px;
        }

        .map-wrapper iframe {
            height: 280px;
        }

        .ph-content h1 {
            font-size: 28px;
        }
    }
</style>

<?php include '../includes/footer.php'; ?>