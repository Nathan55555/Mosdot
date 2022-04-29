<?php
include('../tools/fonction.php');
session_start();
include('nav-main.php');
$id=$_GET['ID'];
$view = get_log($id);
if($view==0)
{

    ?>
    <div class="alert alert-info" role="alert">
  Aucain log pour le moment !
</div>
    <?php
}
else
{
    include('../vues/vview_log.php');
}

?>