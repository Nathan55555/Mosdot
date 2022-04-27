<?php
include('fonction.php');
session_start();
if(connecter())
{
    $id = $_GET['id'];
    $file = getinfo_file($id);

  $path =  $_SESSION['path'];
 $del =  unlink($path);
  if($del)
  {
    deletefile($id);
  }
  header('Location:liste.php');

}
?>