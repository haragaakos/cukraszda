<?php
require_once 'menu.php';
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<script>
  window.addEventListener('load', () => {
  document.querySelector('.navmenu ul').classList.remove('active');
  document.body.classList.remove('mobile-nav-active');
});

  document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('.navmenu ul');
  const dropdownToggles = document.querySelectorAll('.navmenu .dropdown > a');

  // Hamburger menü nyitása/zárása
  menuToggle.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    document.body.classList.toggle('mobile-nav-active'); 
    menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('open'); // Az ikon "open" osztályának hozzáadása/törlése
});// Testreszabás: görgetés letiltása
  });

  // Almenük lenyitása főmenüpontokra kattintva
  dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', function (e) {
      e.preventDefault(); // Oldal ugrásának megakadályozása
      const parent = this.parentElement;
      
      // Csak az adott almenü legyen nyitva
      if (!parent.classList.contains('dropdown-active')) {
        document.querySelectorAll('.dropdown-active').forEach(el => el.classList.remove('dropdown-active'));
      }
      parent.classList.toggle('dropdown-active');
    });
  });

  // Oldalváltás esetén hamburger menü alaphelyzetbe állítása
  window.addEventListener('load', () => {
    if (window.innerWidth <= 1199) {
      navMenu.classList.remove('active');
      document.body.classList.remove('mobile-nav-active');
    }
  });
});

</script>



<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center">   
      <h1 class="sitename">Sweet-Cake Cukrászda</h1>
    </a>

    <nav id="navmenu" class="navmenu d-flex align-items-center">
  <?php echo generateMenuHTML($pdo); ?>
  <?php if (isset($_SESSION['username'])): ?>
    <div class="user-info d-flex align-items-center ms-4">
      <span class="me-3">Üdv, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
      <a href="logout.php" class="btn btn-sm btn-outline-danger">Kijelentkezés</a>
    </div>
  <?php endif; ?>
  <button class="mobile-nav-toggle d-xl-none bi bi-list"></button>
</nav>


  </div>
</header>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sweet-Cake Cukrászda</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Active
  * Template URL: https://bootstrapmade.com/active-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
