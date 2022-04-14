<?php
    include  '../backend/configuration/conf.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Labo | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/style.labo.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <br>
<button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                <span class="sr-only">Switch theme</span>
                <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
            </button>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up" style="margin-bottom: 250px;">
    <h1 class="sign-up__title" style="margin-left: 20px;">Welcome to Labo</h1>
    <p class="sign-up__subtitle" style="margin-left:100px">Sign in to your account to continue</p>
    <form class="sign-in-form form" action="http://localhost/labo/backend/components/users/add.php" method="post" enctype="multipart/form-data">
      <div class="d-flex">
      <label class="form-label-wrapper w-45" style="margin-right: 15px;">
        <p class="form-label">Nom</p>
        <input class="form-input" type="text" placeholder="Enter your  name" name="nom" required>
      </label>
      <label class="form-label-wrapper w-45">
        <p class="form-label">Prénom</p>
        <input class="form-input" type="text" placeholder="Enter your last name" name="prenom" required>
      </label>
      </div>
      <div class="d-flex"><label class="form-label-wrapper w-45" style="margin-right: 15px;">
        <p class="form-label">Mail</p>
        <input class="form-input" type="email" placeholder="Enter your email" name="mail" required>
      </label>
      <label class="form-label-wrapper w-45">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" placeholder="Enter your password" name="password" required>
      </label></div>
      <div class="d-flex">
      <label class="form-label-wrapper w-45"  style="margin-right: 15px;">
        <p class="form-label">Numéro de Téléphone</p>
        <input class="form-input" type="number" placeholder="Enter your full name" name="telephone" required>
      </label>
      <label class="form-label-wrapper w-45">
        <p class="form-label">Profile</p>
        <input class="form-input" type="file" name="profile" id="profile" required>
      </label></div>
      
      
      <button class="form-btn primary-default-btn transparent-btn" type="submit">Sign in</button>
      <br>
      <p class="form-label" style="margin-left:110px">Vous êtes déjà membre ??? <a href="login.php">Connectez-vous</a></p>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>

