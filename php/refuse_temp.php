<?php
include('../tools/fonction.php');
include('nav-main.php');
$id = $_GET['ID'];
temp_refuse($id);
header('Location:view_temp.php');

?>