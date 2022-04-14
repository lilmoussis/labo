
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  "../include /head.php";
    ?>
    <title>Labo | commande</title>
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
                <div class="d-flex">
                <h2 class="main-title">commandes</h2>
                <a href="http://localhost/labo/view/form/commande.php">
                    <button class="form-input"> + Ajouter</button>
                </a>
                </div>
                
                <div class="users-table table-wrapper">
                    <table class="posts-table" style="text-align: center;">
                        <thead>
                        <tr class="users-table-info" >
                            <th>#</th>
                            <th>Date</th>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Commandé par</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        <tr>
                            <td>1</td>
                            <td>02/01/1</td>
                            <td>Tramadol</td>
                            <td>10</td>
                            <td>AJAVON</td>
                            <td>
                            <button class="form-input"><a href="http://localhost/labo/view/update/commande.php">Editer</a></button>
                            <button class="form-input"><a href="http://localhost/labo/backend/components/commande/delete.php">Supprimer</a></button>
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