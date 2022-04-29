<?php
include('../tools/fonction.php');
session_start();
include('nav-main.php');
if(estAdministrateurConnecte())
{
    $view = lister_users();

include('../vues/vliste_users.php');
}
else
{
   
    ?>
    <div class="alert alert-danger" role="alert">
 Accèes reserver à l'Administrateur.
</div>
<?php
}





?>