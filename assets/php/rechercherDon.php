
<?php



include("sous-menu-don.php") ;
    include("../tools/fonction.php"); 
    
// DEBUT du contrôleur lister.php cest bon???
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


    $date=$_POST['date'];
    if($date=='')
    {
      $date='0000';
    }

  

  $don= searchglobalDon($info,$date);
  if(count($don)==0)
  {
    echo '<script type="text/javascript"> alert("Cet date existe pas !")</script>';
  }
   
    //  var_dump($invite);
  }
  

 
    
  if ($etape==1)
  {
    include("../vues/vRechercherDons.php");
    // echo'salut';
  }
  if ($etape==2)
  {
      include("../vues/vListerRecapDon.php");
      // include("../vues/vListerProspect.php");
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
    
