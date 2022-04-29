<?php
include('../tools/fonction.php');
include('nav-main.php');
$id = $_GET['ID'];
$info = get_info_temp($id);
$nom = $info[0]['Nom'];
$mail = $info[0]['Mail'];
$mdp = $info[0]['Mdp'];
temp_valide($id);
signin($nom,$mail,$mdp);
header('Location:view_temp.php');



?>