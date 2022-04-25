
<?php



include("sous-menu.php") ;
    include("../tools/fonction.php"); 
    
// DEBUT du contrôleur lister.php
  if (count($_POST)==0)
  {
    // echo'marche pas';
    $etape=1;
  }
  else
  {
    $etape=2;
    $info=array();
    if (isset($_POST['info']))
    {
    $info = $_POST['info'];
    }  
    $nom=$_POST["nom"];
    if($nom=='')
    {
        $nom='0000';
    }
    $prenom=$_POST['prenom'];
    if($prenom=='')
    {
        $prenom='0000';
    }
    $mail=$_POST['mail'];
    if($mail=='')
    {
        $mail='0000';
    }
    $invite= searchglobal($info,$nom,$prenom,$mail);
    if (count($invite)==0)
    {
     
    //  header('location:rechercher2.php');
     echo '<script type="text/javascript"> alert("Cet invité existe pas !")</script>';
    }

  }
  

 
    
  if ($etape==1)
  {
    include("../vues/vRechercher2.php");
  }

 
  if ($etape==2)
  {
      // include("../vues/vListerAdherent.php");
      include("../vues/vListerProspect.php");
  }

 
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php
  include("footer.php");
  
  
   
  ?>
    
