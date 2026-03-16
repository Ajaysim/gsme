<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?? 'GSME Enterprises | Mining & Environmental Consultancy' ?></title>
  <meta name="description" content="<?= $pageDescription ?? 'GSME Enterprises - Expert Mining Consultancy, Environmental Clearance, DGPS Survey, Drone Mapping from Bhopal MP' ?>">

  <!-- Favicon -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='12' fill='%23f97316'/><text y='.85em' font-size='55' x='8' fill='white' font-weight='bold' font-family='Arial'>GSME</text></svg>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AOS Animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '' ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '' ?>assets/css/responsive.css">
</head>
<body>
