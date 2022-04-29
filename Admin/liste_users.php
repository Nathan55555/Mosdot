<?php
include('../tools/fonction.php');
session_start();

if(estAdministrateurConnecte())
{
    $view = lister_users();

include('vliste_user.php');
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