<?php
    require '../../configuration/conf.php';
    
    if (isset($_POST['nom'])&&isset($_POST['phone'])&&isset($_POST['mail'])&&isset($_POST['genre'])) {
        $nom=$_POST['nom'];
        $phone=$_POST['phone'];
        $mail=$_POST['mail'];
        $genre=$_POST['genre'];

        $nom=strip_tags($_POST['nom']);
        $phone=strip_tags($_POST['phone']);
        $mail=strip_tags($_POST['mail']);
        $genre=strip_tags($_POST['genre']);

        $sql='insert into fournisseur (`nom_fournisseur`,`tel_fournisseur`,`email_fournisseur`,`genre`) values (":nom , :phone , :mail , :genre")'; 
        $prepare=$conn->prepare($sql);
        $prepare->execute(array(
            'nom' => $nom,
            'phone' => $phone,
            'mail' => $mail,
            'genre' => $genre
        ));
        header('location : http://localhost/labo/view/layout/fournisseur.php');
    }
?>