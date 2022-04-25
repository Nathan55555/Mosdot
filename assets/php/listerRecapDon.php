<?php

include("sous-menu-don.php");
include("../tools/fonction.php");

  $info=array();
  if (isset($_GET['info']))
  {
  $info = $_GET['info'];
  }

  $don=lister_donsEntier($info);

  include("../vues/vListerRecapDon.php");
  include("footer.php");
  ?>                             
    
