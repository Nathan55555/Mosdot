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
    $message = $_SESSION['loginUser'].' a supprimer le fichier  '.$file[0]['Nom'];
    add_log($message,$_SESSION['idUser']);
  }
  header('Location:../Admin/liste.php');

}
?>