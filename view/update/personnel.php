<?php

include  "../../backend/configuration/conf.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  "../include /head.php";
    ?>
    <title>Labo | User</title>
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
        <a href="http://localhost/labo/view/layout/personnel_layout.php">
                        <button style="width: 100px;margin-top:2rem" class="form-btn danger-default-btn transparent-btn m">Annuler</button>
                    </a>
        <!-- ! Main -->
        <main class="page-center">
            <article class="sign-up" style="margin-bottom: 250px;">
                <h1 class="sign-up__title">ENREGISTRER UN Personnel</h1>
                <p class="sign-up__subtitle"></p>
                <form class="sign-up-form form" action="http://localhost/labo/backend/components/personnel/update.php" method="post">
                    <div class="" style="display: flex;">
                        <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Nom complet</p>
                            <input class="form-input" type="text" placeholder="Enter your name" name="nom" required>
                        </label>
                    
                        <label class="form-label-wrapper w-45" style="margin-left: 10px;">
                            <p class="form-label">Email</p>
                            <input class="form-input" type="email" placeholder="Enter your email" name="email" required>
                        </label>
                    </div>
                    <div class="" style="display:flex ;">
                        <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Phone</p>
                            <input class="form-input" type="number" placeholder="Enter your number" name="phone" required>
                        </label>
                    
                        <label class="form-label-wrapper w-45" style="margin-left: 10px;">
                            <p class="form-label">Service</p>
                            <select class="form-input" name="service">
                                <option>Select service</option>
                            </select>
                        </label>
                    </div>
                    <div class="" style="display:flex ;">
                        <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Genre</p>
                            <input class="form-input" type="text" placeholder="Entrer une  " name="genre" required>
                        </label>
            
                        <label class="form-label-wrapper w-45" style="margin-left: 10px;">
                            <p class="form-label">Date Birth</p>
                            <input class="form-input" type="date" name="date_birth" required>
                        </label>
                    </div>    
                        <label class="form-label-wrapper">
                            <p class="form-label">Photo</p>
                            <input class="form-input" type="file" name="picture" required>
                        </label>

                    <button style="margin-top: 2rem" class="form-btn primary-default-btn transparent-btn m" type="submit">Enrégistrer</button>
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




