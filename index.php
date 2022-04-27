<?php
include('fonction.php');
if(count($_POST)==0)
{
  include('nav-main.php');
  include('vlogin.php');
  
}
else
{
  $nom = $_POST['nom'];
  $mdp = $_POST['mdp'];
  if($nom =="" OR $mdp =="")
  {
    include('nav-main.php');
    include('vlogin.php');
  }
  else
  {
    $log = identifier($nom,$mdp);
    if (is_array($log)) 
      { 
        $user = getusers($nom,$mdp);
        session_start();
        editsession($user[0]['ID'],$user[0]['Nom'],$user[0]['Categorie']);
       
        header('Location:files.php');
        
  
      }
      else
      {
        header('Location:index.php');
      }
    
      
  }
}




?>