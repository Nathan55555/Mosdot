<?php




include("entete.php") ;
include("../tools/fonction.php");
$don =  lister_dons($_GET['ID']);
$nom=getnom($_GET['ID']);

if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  
  $etape = 2;
  $unLibelle=$_POST['Libelle'];
  $unIdpart=$_GET['ID'];
  $untypeDons=$_POST['Type_Dons'];
  $unMontant=$_POST['montant'];
  $unTypeReg=$_POST['typeReglement'];
  $estRegle=$_POST['estRegle'];
  $dateReg=$_POST['date'];
  $comm=$_POST['com'];
  ajouter_dons($unIdpart,$unLibelle,$untypeDons, $unMontant,$unTypeReg,$estRegle,$dateReg,$comm);
  header('location:listerRecapDon.php');
  
}


include("../vues/vAjouter_Dons.php");
include("../vues/vLister_dons.php");
include("footer.php");