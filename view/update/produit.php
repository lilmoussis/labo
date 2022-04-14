<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include  "../include /head.php";
    ?>
    <title>Labo | add product</title>
    
</head>

<body>
<div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    <?php
    //inclusion du sidebar
    include  "../include /sidebar.php" ?>
    <div class="main-wrapper">
        <!-- ! Main nav -->
        <?php include  "../include /navbar.php"?>
        <a href="http://localhost/labo/view/layout/produit_layout.php">
                        <button style="width: 100px;margin-top:2rem" class="form-btn danger-default-btn transparent-btn m">Annuler</button>
                    </a>
        <!-- ! Main -->
        <main class="page-center">
    <article class="sign-up" style="margin-bottom: 250px;">
        <h1 class="sign-up__title"></h1>
        <form class="sign-up-form form" action="" method="">
            <div class="d-flex">
                <label class="form-label-wrapper w-45" style="margin-right: 15px;"> 
                    <p class="form-label">Nom du produit</p>
                    <input class="form-input" type="text" placeholder="Entrer le nom du produit" required>
                </label> 
                <label class="form-label-wrapper w-45 ">
                <p class="form-label">Categorie</p>
                    <select class="form-input" name="categorie" id="">
                        <option value="">Sélectionner la catégorie</option>
                        <option value=""></option>
                    </select>
                </label>
                </div>
            <div class="d-flex">
                
            <label class="form-label-wrapper w-45 " style="margin-right: 15px;">
                <p class="form-label">Fabrication</p>
                <input class="form-input" type="date" placeholder="Entrer sa date de fabrication" required>
            </label>
            <label class="form-label-wrapper w-45 margel">
                <p class="form-label">Expiration</p>
                <input class="form-input" type="date" placeholder="Entrer sa date d'expiration" required>
            </label>
            </div>
            <label class="form-label-wrapper">
                <p class="form-label">Type</p>
                <select class="form-input" name="type" id="">
                    <option value="">Sélectionner le type de médicament</option>
                    <option value=""></option>
                </select>
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
