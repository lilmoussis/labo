<?php
session_start();

session_destroy();
header('location:http://localhost/labo/view/login.php');
?>