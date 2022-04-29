<?php
include('../tools/fonction.php');
session_start();
if(connecter())
{
    $id = $_GET['id'];
    $path = $_GET['path'];
    $file = getinfo_file($id);

 
 $del =  unlink($path);
  if($del)
  {
    deletefile($id);
  }
  header('Location:../Admin/liste.php');

}
?>