<?php

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
  <link rel="stylesheet" href="./css/style.min.css">
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
    <h1 class="sign-up__title">Welcome to Labo</h1>
    <p class="sign-up__subtitle">Log in to your account to continue</p>
    <form class="sign-up-form form" action="http://localhost/labo/backend/components/users/login.php" method="post">
      <label class="form-label-wrapper w-45">
        <p class="form-label">Mail</p>
        <input class="form-input" type="email" placeholder="Enter your email" name="mail" required>
      </label>
      <label class="form-label-wrapper w-45">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" placeholder="Enter your password" name="password" required>
      </label>
      <label class="form-checkbox-wrapper">
        <input class="form-checkbox" type="checkbox" required>
        <span class="form-label">Se souvenir de moi</span>
      </label>
      <a href="index.php"><button class="form-btn primary-default-btn transparent-btn" type="submit">Se connecter</button>
      </a>
      <br>
      <p class="form-label"> Vous êtes nouveau ??? <a href="signin.php">Inscrivez-vous</a></p>
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