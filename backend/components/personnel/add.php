<?php 
    require '../../configuration/conf.php';

    if (isset($_POST['nom'])&&isset($_POST['mail'])&&isset($_POST['phone'])&&isset($_POST['service'])&&isset($_POST['genre'])&&isset($_POST['salaire'])&&isset($_POST['embauche'])&&isset($_POST['naissance'])&&isset($_FILES['picture'])) {
        
        $nom=$_POST['nom'];
        $mail=$_POST['mail'];
        $phone=$_POST['phone'];
        $service=$_POST['service'];
        $genre=$_POST['genre'];
        $embauche=$_POST['embauche'];
        $salaire=$_POST['salaire'];
        $naissance=$_POST['naissance'];
        $picture=$_FILES['picture']['name'];

        $nom=strip_tags($_POST['nom']);
        $mail=strip_tags($_POST['mail']);
        $phone=strip_tags($_POST['phone']);
        $service=strip_tags($_POST['service']);
        $genre=strip_tags($_POST['genre']);
        $embauche=strip_tags($_POST['embauche']);
        $salaire=strip_tags($_POST['salaire']);
        $naissance=strip_tags($_POST['naissance']);
        $picture=strip_tags($_FILES['picture']['name']);

        if ($picture['error']=0) {
            if ($picture['size']<=4000000) {
                $path = pathinfo($picture['name']);
                $extension = $path['extension'] ;
                $extensions = ['png','jpg','jpeg']; 
                if (in_array($extension,$extensions)) {
                move_uploaded_file($picture['tmp_name'], '../../../view/img/user/' . $_POST['nom']. '.' . $extension );
            }
                
            }
            
        }
        $sql="INSERT INTO `personnel` (`nom_personnel`, `naissance_personnel`, `date_embauche`, `genre`, `email_personnel`, `salaire_personnel`, `lien_img`, `tel_personnel`, `id_service`) VALUES (':nom', ':naissance', ':embauche', ':genre', ':mail', ':salaire', ':picture', ':phone', ':service')";

        $prepare=$conn->prepare($sql);
        $prepare->execute(array(
              'nom'=>$nom,
              'naissance'=>$naissance,
              'embauche'=>$embauche,
              'genre'=>$genre,
              'mail'=>$mail,
              'salaire'=>$salaire,
              'picture'=>$picture,
              'phone'=>$phone,
              'service'=>$service
        ));

        

    }
?>