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
        <div  style="width: 100px;margin-top:2rem"><a href="http://localhost/labo/view/layout/personnel_layout.php">
                        <button class="form-btn danger-default-btn transparent-btn m">Annuler</button>
        </a> </div>         
        <!-- ! Main -->
        <main class="page-center" >
            <article class="sign-up" style="margin-bottom: 250px;">
                <h1 class="sign-up__title">ENREGISTRER UN Personnel</h1>
                <p class="sign-up__subtitle"></p>
                <form class="sign-up-form form" action="http://localhost/labo/backend/components/personnel/add.php" method="post">
                    <div class="" style="display: flex;">
                        <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Nom</p>
                            <input class="form-input" type="text" placeholder="Enter your name" name="nom" required>
                        </label>
                        <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Prénom</p>
                            <input class="form-input" type="text" placeholder="Enter your name" name="nom" required>
                        </label>
                    
                        <label class="form-label-wrapper w-45" style="margin-left: 10px;">
                            <p class="form-label">Email</p>
                            <input class="form-input" type="email" placeholder="Enter your email" name="mail" required>
                        </label>
                    </div>
                    <div class="" style="display:flex ;">
                        <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Phone</p>
                            <input class="form-input" type="number" placeholder="Enter your number" name="phone" required>
                        </label>
                    
                        <label class="form-label-wrapper w-45" style="margin-left: 10px;">
                        <p class="form-label">Date de naissance</p>
                        <input class="form-input" type="date" name="naissance" required>
                    </label>
                    <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Genre</p>
                            <input class="form-input" type="text" placeholder="Entrer une  " name="genre" required>
                        </label>
                    </div>
                    <div class="" style="display:flex ;">
                    <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Salaire</p>
                            <input class="form-input" type="number" placeholder="Enter your number" name="salaire" required>
                        </label>
            
                        <label class="form-label-wrapper w-45" style="margin-left: 10px;">
                            <p class="form-label">Date Embauche</p>
                            <input class="form-input" type="date" name="embauche" required>
                        </label>

                        <label class="form-label-wrapper w-45" style="margin-left: 10px;">
                            <p class="form-label">Rôle</p>
                            <select class="form-input" name="service">
                                <option>Directeur</option>
                                <option value="">Laboratin</option>
                                <option value="">Chercheur</option>
                                <option value="">Expérimenteur</option>
                                <option value="">Gestionnaire</option>
                            </select>
                        </label>                        

                    </div>    
                    <div class="d-flex">
                    <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Nationalité</p>
                            <input class="form-input" type="text" placeholder="Enter your number" name="nationalité" required>
                        </label>
                        <label class="form-label-wrapper w-45" style="margin-right: 10px;">
                            <p class="form-label">Situation matrimoniale</p>
                            <select class="form-input" name="service">
                                <option>Marié(e)</option>
                                <option value="">Célibataire</option>
                                <option value="">Fiancé(e)</option>
                                <option value="">Concubin(e)</option>
                                <option value="">Veuf(ve)</option>
                            </select>
                        </label>
                        <label class="form-label-wrapper w-45" style="margin-right: 15px;">
                            <p class="form-label">Nombre d'enfants</p>
                            <input class="form-input" type="number" placeholder="Enter your number" name="enfant" required>
                        </label>
                    </div>
                    <label class="form-label-wrapper">
                        <p class="form-label">Photo</p>
                        <input class="form-input" type="file" name="picture" required>
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




