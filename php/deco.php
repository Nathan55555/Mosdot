<?php

include('../tools/fonction.php');
session_start();
deconnecterVisiteur() ;
session_destroy();
header('location:../index.php');
?>