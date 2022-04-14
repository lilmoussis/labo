<?php 
include "../../backend/configuration/conf.php";

?>
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
        <div style="width: 100px;margin-top:2rem" ><a href="http://localhost/labo/view/layout/produit_layout.php">
                        <button class="form-btn danger-default-btn transparent-btn m">Annuler</button>
                    </a></div>
        <!-- ! Main -->
        <main class="page-center">
    <article class="sign-up" style="margin-bottom: 250px;">
        <h1 class="sign-up__title"></h1>
        <form class="sign-up-form form" action="produit.php" method="post">
            <div class="d-flex">
                <label class="form-label-wrapper w-45" style="margin-right: 15px;"> 
                    <p class="form-label">Nom du produit</p>
                    <input class="form-input" type="text" placeholder="Entrer le nom du produit" name="nom" required>
                </label> 
                <label class="form-label-wrapper w-45" style="margin-right: 15px;"> 
                    <p class="form-label">Quantite</p>
                    <input class="form-input" type="number" placeholder="Entrer le nom du produit" name="quantite" required>
                </label> 
                </div>
            <div class="d-flex">
                
            
            <label class="form-label-wrapper w-45 margel">
                <p class="form-label">Poids</p>
                <input class="form-input" type="number" placeholder="Entrer sa date d'expiration" name="poids" required>
            </label>
            <label class="form-label-wrapper w-45 " style="margin-right: 15px;">
                <p class="form-label">Description</p>
                <input class="form-input" type="text" placeholder="Entrer sa date de fabrication" name="description" required>
            </label>
            </div>
            
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
<?php 
require '../../configuration/conf.php';

if ("submit") {
   
if (isset($_POST['nom'])&&isset($_POST['quantite'])&&isset($_POST['poids'])&&isset($_POST['description'])){
    $nom=$_POST['nom'];
    $quantite=$_POST['quantite'];
    $poids=$_POST['poids'];
    $description=$_POST['description'];

    $sql = "INSERT INTO `produit` ( `nom_produit`, `quantite_produit`, `poids_produit`, `description_produit`) VALUES (:nom,:quantite,:poids,:description);";
    $prepare=$conn->prepare($sql);
    $prepare->execute([
       'nom' => $nom,
        'quantite' => $quantite,
        'poids' => $poids,
        'description' => $description,

    ]);

} header('location : ../../../../../view/layout/produit_layout.php');
}
?>