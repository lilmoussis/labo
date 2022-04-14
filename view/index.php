<?php
    require_once "../backend/configuration/conf.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  "include /head.php";
    ?>
  <title>Labo | dashbord</title>
</head>

<body>
  <div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
  <!-- ! Sidebar -->
    <?php
    //inclusion du sidebar
    include  "include /sidebar.php";
    ?>
  <div class="main-wrapper">
    <!-- ! Main nav -->
    <?php include  "include /navbar.php"?>
    <!-- ! Main -->
    <main class="main users chart-page" id="skip-target">
      <div class="container">
        <h2 class="main-title">Dashboard</h2>
        <div class="row stat-cards">
          <div class="col-md-6 col-xl-3">
          <a href="layout/patient_layout.php">
            <article class="stat-cards-item">
              <div class="stat-cards-icon primary">
                <i data-feather="bar-chart-2" aria-hidden="true"></i>
              </div>
              
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">86</p>
                <p class="stat-cards-info__title">Patients</p>
                
              </div>
              
            </article></a>
          </div>
          <div class="col-md-6 col-xl-3">
            <a href="layout/personnel_layout.php">
            <article class="stat-cards-item">
              <div class="stat-cards-icon warning">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">0</p>
                <p class="stat-cards-info__title">Employés</p>
                
              </div>
            </article>
            </a>
          </div>
          <div class="col-md-6 col-xl-3">
            <a href="layout/produit_layout.php">
            <article class="stat-cards-item">
              <div class="stat-cards-icon purple">
                <i data-feather="file" aria-hidden="true"></i>
              </div>
              <div class="stat-cards-info">
                <p class="stat-cards-info__num">0</p>
                <p class="stat-cards-info__title">Produits</p>
                
              </div>
            </article>
            </a>
          </div>
          <div class="col-md-6 col-xl-3">
            <a href="layout/fournisseur_layout.php">
              <article class="stat-cards-item">
                <div class="stat-cards-icon success">
                  <i data-feather="feather" aria-hidden="true"></i>
                </div>
                <div class="stat-cards-info">
                  <p class="stat-cards-info__num">56</p>
                  <p class="stat-cards-info__title">Fournisseurs</p>
                  
                </div>
              </article>
            </a>
          </div>
        </div>
       
      </div>
    </main>
    <!-- ! Footer -->
    <footer class="footer">
  <div class="container footer--flex">
    <div class="footer-start">

    </div>
    <ul class="footer-end">
      <li><a href="##">About</a></li>
      <li><a href="##">Support</a></li>
      <li><a href="##">Puchase</a></li>
    </ul>
  </div>
</footer>
  </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>