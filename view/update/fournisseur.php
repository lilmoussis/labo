<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  "../include /head.php";
    ?>
    <title>Labo | add </title>
</head>

<body>
<div class="layer"></div>
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    <?php
    //inclusion du sidebar
    include  "../include /sidebar.php" ?>
    <div class="main-wrapper">
        <!-- ! Main nav -->
        <?php include  "../include /navbar.php"?>
        <a href="http://localhost/labo/view/layout/fournisseur_layout.php">
                        <button style="width: 100px;margin-top:2rem" class="form-btn danger-default-btn transparent-btn m">Annuler</button>
                    </a>
        <!-- ! Main -->
<main class="page-center">
    <article class="sign-up" style="margin-bottom: 250px;">
        <h1 class="sign-up__title">GERER UN FOURNISSEUR</h1>
        <p class="sign-up__subtitle"></p>
        <form class="sign-up-form form" action="http://localhost/labo/backend/components/fournisseur/add.php" method="post">
            <div class="d-flex">
            <label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Nom complet </p>
                <input class="form-input" type="text" placeholder="Entrer le nom du fournisseur" name="nom" required>
             </label>
             <label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Numero de telephone  </p>
                <input class="form-input" type="text" placeholder="Entrer une  " name="phone" required>
             </label>
            </div>
            <div class="d-flex">
            <label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Adresse mail </p>
                <input class="form-input" type="mail" placeholder="Entrer une  " name="mail" required>
             </label>
             <label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Genre</p>
                <select class="form-input" name="genre" id="">
                    <option value="">Sélectionner le genre</option>
                    <option value="">Homme</option>
                    <option value="">Femme</option>
                </select>
             </label>
            </div>
             <br>
            <button style="margin-top: 2rem;" class="form-btn primary-default-btn transparent-btn m" type="submit">Enrégistrer</button>
        </form>
    </article>
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
<?php  include  "../include /script.php"?>
</body>

</html>