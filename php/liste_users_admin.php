<?php
include('../tools/fonction.php');
session_start();
include('nav-main.php');
if(connecter())
{


if(estAdministrateurConnecte())
{
$id = $_GET['ID'];
$view = listefile_user($id);
if($view==0)
    {
       ?>
       <div class="alert alert-secondary" role="alert">
 Vous n'avez aucain Fichiers!
</div>
<?php
    }
    else
    {
        include('../vues/v2liste.php');

    }
}
else
    {
        ?>
        <div class="alert alert-danger" role="alert">
    Accèes reserver à l'Administrateur.
    </div>
    <?php
}
}
else
{
    ?>
    <div class="alert alert-danger" role="alert">
Veuillez vous connecter!
</div>
<?php
}

?>