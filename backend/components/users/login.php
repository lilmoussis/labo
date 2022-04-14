<?php
require "../../configuration/conf.php";

     if(isset($_POST["mail"]) && isset($_POST["password"]))  
     {  
          $query = "SELECT * FROM users WHERE email_user = :mail AND motdepasse = :password";  
          $statement = $conn->prepare($query);  
          $statement->execute(  
               array(  
                    'mail'     =>     $_POST["mail"],  
                    'password'     =>     $_POST["password"]  
               )  
          );  
          $count = $statement->rowCount();  
          if($count > 0)  
          {  
               $_SESSION["mail"] = $_POST["mail"];  
               header("location:http://localhost/labo/view/index.php");  
          }  
          else  
          {  
               $message = '<label>Vos corrdonnées sont erronnés</label>';  
          }  
     }  
 
 

?>
