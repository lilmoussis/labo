<?php
include  '../../configuration/conf.php';

if (isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['mail'])&&isset($_POST['password'])&&isset($_POST['telephone'])&&isset($_FILES['profile'])) {
echo "ok1";
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $telephone=$_POST['telephone'];
    $file=$_FILES['profile']['name'];

    $nom=strip_tags($_POST['nom']);
    $prenom=strip_tags($_POST['prenom']);
    $mail=strip_tags($_POST['mail']);
    $password=strip_tags($_POST['password']);
    $telephone=strip_tags($_POST['telephone']);

    if ($file['error']==0) {
        echo "ok2";
        if ($file['size']<=4000000) {
            echo "ok3";
            $path = pathinfo($file['name']);
            $extension = $path['extension'] ;
            $extensions = ['png','jpg','jpeg']; 
            if (in_array($extension,$extensions)) {
                move_uploaded_file($file['tmp_name'], '../../../view/img/user/' . $_POST['nom']. '.' . $extension );
            }
        }
    }
    $prepare=$conn->prepare("INSERT INTO `users` ( `nom_user`, prenom_user,photo_user, email_user, `motdepasse`, telephone) VALUES (:nom,:prenom,:profile,:mail,:password,:telephone);");
    $prepare->execute([
        'nom'=> $nom,
        'prenom' => $prenom,
        'profile' => $file,
        'mail'=> $mail,
        'password' => $password,
        'telephone'=>$telephone,
    ]);
    header("Location: http://localhost/labo/view/login.php");
}
?>