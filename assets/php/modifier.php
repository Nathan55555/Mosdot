<?php



$repVues="../vues/";
include("../tools/fonction.php"); 
  

// DEBUT du controleur modifier.php


    
    if($_GET['ID']=="")
    {
      $etape=1;
    }
    else
    {
      $unID=$_GET["ID"];
      $infos=array();
      if(isset($_POST['infos']))
      {
        $infos=$_POST['infos'];
        
      }  
      $invites=listerID($infos,$unID);
      if(count($invites)<=0)
       {
      $etape = 1;
      }
      else
      {
        $etape=2;
      }
      
      if(count($_POST)>=6)
      {
        $etape = 3;
        $unIDD=$_GET["ID"];
        $unStatut=$_POST["Statut"];
        $unNom=$_POST["nom"];
        $unPrenom=$_POST["prenom"];
        $unNomHebraique=$_POST["prenomHebraique"];
        $unNomHP=$_POST['nom_HP'];
        $unEmail=$_POST["email"];
        $uneDate=$_POST["date"];
        $unSexe=$_POST["sexe"];
        $uneAdresse=$_POST["adresse"];
        $uneAdresse1=$_POST["Adresse1"];
        $uneVille=$_POST["ville"];
        $unCp=$_POST["cp"];
        $unMobile=$_POST["mobile"];
        $uneSociete=$_POST["societe"];
        $unPay=$_POST["Pays"];
        $unCom=$_POST["com"];
        modifier($unIDD,$unStatut,$unNom,$unPrenom,$unNomHebraique,$unNomHP,$unEmail,$uneDate,$unSexe,$uneAdresse,$uneAdresse1,$unCp,$uneVille,$unPay,$unMobile,$uneSociete,$unCom);
        header("Location: listeProspect.php");
      }
   
      }


      
      
    
    
  // }
// }


  
 

  

$infoss=array();
if (isset($_GET['ID']))
{
$infoss=$_GET['ID'];
}  
$invite =listerUser($infoss);

$don =  lister_dons($_GET['ID']);

  
  


// D�but de l'affichage (les vues)

include("entete.php");

if($etape==3)
{
  
  include("../vues/vlister.php");
  
}
if($etape==1)
{
  include("../vues/vModifier.php");
  include("../vues/vLister_dons.php");
  // include("../vues/vModifier1.php");
  // include("vues/vlister.php");
  
}
if($etape==2)
{
  include("../vues/vModifier.php");
  include("../vues/vLister_dons.php");
}


?>
  
