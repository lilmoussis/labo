<?php
    include  "../../backend/configuration/conf.php";
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
        <main class="main users chart-page" style="margin-top: 30px;" id="skip-target">
            <div class="container">
                <div class="d-flex">
                <h2 class="main-title">Personnels</h2>
                <a href="http://localhost/labo/view/form/personnel.php">
                    <button class="form-input"> + Ajouter</button>
                </a>
                </div>
                <br>
                <div class="users-table table-wrapper">
                    <table class="posts-table">
                        <thead  style="text-align: center;">
                        <tr class="users-table-info" >
                            <th>Profil</th>
                            <th>Nom complet</th>
                            <th>Genre</th>
                            <th>Mail</th>
                            <th>Telephone</th>
                            <th>Service</th>
                            <th>Embauché(e) le</th>
                            <th>Salaire</th>
                            <th>Date de naissance</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody  style="text-align: center;">
                        <tr>
                            <td>
                                <div class="pages-table-img">
                                    <picture></picture>
                                </div>
                            </td>
                            <td>asddd</td>
                            <td>ddddd</td>
                            <td>fffff@ffjfjfjfj</td>
                            <td>fffff</td>
                            <td>ffff</td>
                            <td>fff</td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="form-input"><a href="http://localhost/labo/view/update/">Editer</a></button>
                                <button class="form-input"><a href="http://localhost/labo/backend/components//delete.php">Supprimer</a></button>
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