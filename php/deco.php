<?php

include('../tools/fonction.php');
session_start();
$message = $_SESSION['loginUser']." s\'est deconnecter";
add_log($message,$_SESSION['idUser']);
deconnecterVisiteur() ;
session_destroy();
header('location:../index.php');
?>