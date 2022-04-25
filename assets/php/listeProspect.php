<?php



// include("entete.php");
// include("sous-menu.php"); 

include('sous-menu.php');

    

include("../tools/fonction.php");

  $info=array();
  if (isset($_GET['info']))
  {
  $info = $_GET['info'];
  }
   
  $invite = listerInvite($info);
  
  
  
 
//   include($repVues."menu.php") ;

  include("../vues/vListerProspect.php");
  // include("footer.php") ;
  include("footer.php");
  ?>                             
    
