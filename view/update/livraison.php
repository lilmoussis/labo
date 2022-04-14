 id_commande	id_fournisseur	livraison(date)
<?php
include '../../backend/configuration/conf.php';
?>

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
        <a href="http://localhost/labo/view/layout/livraison_layout.php">
                        <button style="width: 100px;margin-top:2rem" class="form-btn danger-default-btn transparent-btn m">Annuler</button>
                    </a>
        <!-- ! Main -->
<main class="page-center">
    <article class="sign-up" style="margin-bottom: 250px;">
        <h1 class="sign-up__title">CREER UNE LIVRAISON</h1>
        <p class="sign-up__subtitle"></p>
        <form class="sign-up-form form" action="http://localhost/labo/backend/components/livraison/add.php" method="post">
            <div class="d-flex">
			<label class="form-label-wrapper w-45" style="margin-right:15px">
                <p class="form-label">Produit </p>
				<select class="form-input" name="produit" id="">
					<option value="">Sélection un produit commandé</option>
					<option value=""></option>
				</select>
             </label>
            <label class="form-label-wrapper w-45" style="margin-right:15px">
			<p class="form-label">Fournisseur </p>
				<select class="form-input" name="fournisseur" id="">
					<option value="">Sélection le fournisseur</option>
					<option value=""></option>
				</select>
            </label>
			</div>
            <label class="form-label-wrapper">
                <p class="form-label">Date de livraison </p>
                <input class="form-input" type="date"  name="" required>
             </label>
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