<?php
include('fonction.php');
session_start();

if(isset($_POST))
{
    
    include('nav-main.php');
    include('vlogin.php');
}
else
{
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];
    $log = identifier($nom,$mdp);
    if ( is_array($log) ) 
      { 
        $user = getusers($nom,$mdp);
        editsession($user[0]['ID'],$user[0]['Nom'],$user[0]['Categorie']);
        header('Location:liste.php');

      }
      else
      {
          
      }
   
    
}

?>