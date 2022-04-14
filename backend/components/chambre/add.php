<?php
require '../../configuration/conf.php';

if (isset($_POST['numero'])&&isset($_POST['etage'])) {
    $numero= $_POST['numero'] ;
    $etage= $_POST['etage'] ;

    $numero=strip_tags($_POST['numero']);
    $etage=strip_tags($_POST['etage']);

    $sql="insert into chambre (numero_chambre,etage) values (:numero,:etage); ";
    $prepare=$conn->prepare($sql);
    $prepare->execute([
        'numero' => $numero,
        'etage' => $etage,

    ]);

    header('location : http://localhost/labo/view/layout/chambre_layout.php');

}
?>