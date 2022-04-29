<?php
include('../tools/fonction.php');
session_start();
include('nav-main.php');
$view = liste_all_temps();
if($view==0)
{
    ?>
    <div class="alert alert-secondary" role="alert">
Aucune Demande pour le moment!
</div>
<?php
}
else
{
    include('../vues/vview_temp.php');
}

?>