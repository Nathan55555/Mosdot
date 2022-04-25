<?php


$repVues="../vues/";
include("../tools/fonction.php"); 

    
    if($_GET['ID']=="")
    {
      $etape=1;
    }
    else
    {
      $unIdDon=$_GET["ID"];
      $nom=getnomdon($unIdDon);
      $infos=array();
      if(isset($_POST['infos']))
      {
        $infos=$_POST['infos'];
        
      }  
      $invites=listerIDDONS($infos,$unIdDon);
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
        $unIdDon=$_GET["ID"];
        $unLibelle=$_POST["Libelle"];
        $unType=$_POST["Type_Dons"];
        $unMontant=$_POST["montant"];
        // $unPaiement=$_POST["paiement"];
        $unRegle=$_POST["typeReglement"];
        $unEstPaye=$_POST['estRegle'];
        $unDate=$_POST["date"];
        $unCom=$_POST["com"];
       
        
        modifierDon($unIdDon,$unLibelle,$unType,$unMontant,$unRegle,$unEstPaye,$unDate,$unCom);
        header('Location:listerRecapDon.php');
        
      }
   
      }


      
      
    
    
  // }
// }


  
 

  

$infoss=array();
if (isset($_GET['ID']))
{
$infoss=$_GET['ID'];
}  
// $invite =listerUser($infoss);

$don =  lister_dons($_GET['ID']);


  
  


// D�but de l'affichage (les vues)

include("entete.php");

if($etape==3)
{
  
  include("../vues/vlisterRecapDon.php");
  
}
if($etape==1)
{
  include("../vues/vModifier1.php");
  include("../vues/vLister_dons.php");
  
}
if($etape==2)
{
  include("../vues/vModifier1.php");
  include("../vues/vLister_dons.php");
}


?>
  
