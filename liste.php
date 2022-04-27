<?php
include('fonction.php');
session_start();


if(estAdministrateurConnecte() )
{
    $view = listefile();
    include('nav-main.php');
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
        include('v2liste.php');

    }
}
elseif(user_co())
{
    $id = $_SESSION['idUser'];
    $view = listefile_user($id);
    include('nav-main.php');
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
        include('v2liste.php');

    }
    
    
}
else
{
    include('nav-main.php');
   
    ?>
    <div class="alert alert-danger" role="alert">
  ERREUR 404!
</div>
<?php
    
}

?>