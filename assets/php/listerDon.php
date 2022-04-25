<?php



// include("sous-menu-don.php");
include("../tools/fonction.php");

  $info=array();
  if (isset($_GET['info']))
  {
  $info = $_GET['info'];
  }

  // $don=lister_dons($info);
  $don = lister_donsEntier($info);
  
  
 
//   include($repVues."menu.php") ;
  include("../vues/vLister_dons.php");
  // include("footer.php") ;
  include("footer.php");
  ?>                             
    
