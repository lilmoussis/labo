<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  "../include /head.php";
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
    include  "../include /sidebar.php";
    ?>
    <div class="main-wrapper">
        <!-- ! Main nav -->
        <?php include  "../include /navbar.php"?>
        
        <!-- ! Main -->
        <main class="main users chart-page" id="skip-target">
            <div class="container">
                <div class="d-flex"><h2 class="main-title">Produits</h2>
                <a href="http://localhost/labo/view/form/produit.php">
                    <button class="form-input"> + Ajouter</button>
                </a></div>
                <div class="users-table table-wrapper">
                    <table class="posts-table">
                        <thead>
                        <tr class="users-table-info">
                            <th>#</th>
                            <th>Désignation</th>
                            <th>Prix</th>
                            <th>Qunatité</th>
                            <th>Catégorie</th>
                            <th>Type</th>
                            <th>Fabriqué le</th>
                            <th>Expire le</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>17.04.2021</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                            <button class="form-input"><a href="http://localhost/labo/view/update/patient.php">Editer</a></button>
                            <button class="form-input"><a href="http://localhost/labo/backend/components/patient/delete.php">Supprimer</a></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
<?php include  "../include /script.php"?>
</body>

</html>