<?php
include '../../backend/configuration/conf.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  "../include /head.php";
    ?>
    <title>Labo | add command </title>
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
        <div class="" style="width: 100px;margin-top:2rem" ><a href="http://localhost/labo/view/layout/commande_layout.php">
                        <button class="form-btn danger-default-btn transparent-btn m">Annuler</button>
                    </a></div>
        <!-- ! Main -->
<main class="page-center">
    <article class="sign-up" style="margin-bottom: 250px;">
        <h1 class="sign-up__title">CREER UNE COMMANDE </h1>
        <p class="sign-up__subtitle"></p>
        <form class="sign-up-form form" action="http://localhost/labo/backend/components/commande/add.php" method="post">
            <div class="d-flex">
            <label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Nom de la commande </p>
                <select class="form-input" name="produit" id="">
                    <option value="">Sélectionner le produit</option>
                    <option value=""></option>
                </select>
             </label>
             <label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Quantité de la commande</p>
                <input class="form-input" type="number" placeholder="Entrer une commande " name="" required>
             </label>
            </div>
             <div class="d-flex">
             <label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Date de la commande </p>
                <input class="form-input" type="date" placeholder="" name="date" required>
             </label>
             <label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Commandé par </p>
                <select class="form-input" name="personnel" id="">
                    <option value="">Selectionner le personnel qui  commande</option>
                    <option value=""></option>
                </select>
             </label>
             </div>
             <br><br>

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