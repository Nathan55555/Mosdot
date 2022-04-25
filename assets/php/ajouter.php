<?php




include("sous-menu.php") ;
include("../tools/fonction.php");


if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  
  $etape = 2;
//    $unId=$_POST["id"];
   $unStatut=$_POST["statut"];
   $unNom=$_POST["nom"];
   $unNomHP=$_POST['nom_HP'];
   $unPrenom=$_POST["prenom"];
   $unNomHebraique=$_POST["prenomHebraique"];
   $unEmail=$_POST["email"];
   $uneDate=$_POST["date"];
   if (isset($uneDate))
   {
     $uneDate="";
   }

   $unSexe=$_POST["sexe"];
   if (isset($unSexe))
   {
     $unSexe="";
   }
   
   $uneAdresse=$_POST["adresse"];
   if (isset($uneAdresse))
   {
     $uneAdresse="";
   }
   
   $uneAdresse1=$_POST["adresse1"];
   if (isset($uneAdresse1))
   {
     $uneAdresse1="";
   }
   
   $unCp=$_POST["ville"];
   if (isset($unCp))
   {
     $unCp="";
   }
   
   $uneVille=$_POST["pays"];
   if (isset($uneVille))
   {
     $uneVille="";
   }
   
   $unPays=$_POST["cp"];
   if (isset($unPays))
   {
     $unPays=0;
   }
   
   $unMobile=$_POST["mobile"];
   if (isset($unMobile))
   {
     $unMobile=0;
   }
   
   $uneSociete=$_POST["societe"];
   if (isset($uneSociete))
   {
     $uneSociete="";
   }
   
   $unCom=$_POST["com"];
   if (isset($unCom))
   {
     $unCom="";
   }
 
   
  ajouter($unStatut,$unNom,$unPrenom,$unNomHebraique,$unNomHP,$unEmail,$uneDate,$unSexe,$uneAdresse,$uneAdresse1,$unCp,$uneVille,$unPays,$unMobile,$uneSociete,$unCom);
    // echo'ajoute';
    header('location:listeProspect.php');
    
  } 


// var_dump($test);


include("../vues/vAjouter.php");

  include("footer.php");
?>