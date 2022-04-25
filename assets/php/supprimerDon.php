<?php


// DEBUT du contr�leur ajouter.php
include("../tools/fonction.php"); 
include("sous-menu-don.php");



$id=$_GET['ID'];


$etape = 2;
$don = supprimerDon2($id);
header('Location:listerRecapDon.php');


// if (count($_POST)==0)
// {
//   $etape = 1;
// }
// else
// {
//   $etape = 2;
  
//   $ref=$_POST["ref"];
 
//   $supp= supprimerdon($ref);
//   // var_dump($supp);

// }

// $info=array();
// if (isset($_GET['info']))
// {
// $info = $_GET['info'];
// }  
// $invite = lister($info);





// D�but de l'affichage (les vues)

include("entete.php") ;  
include("../vues/vSupprimerDon.php");
include("../vues/vListerProspect.php");
// include("../vues/vListerAdherent.php");
include("../vues/vListerRecapDon.php");
include("footer.php");

?>


  
