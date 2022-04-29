<?php
include('../tools/fonction.php');

session_start();
include('nav-main.php');
$page = 2;
$id = $_SESSION['idUser'];
compte_visite_page($id,$page);


if(estAdministrateurConnecte() )
{
    
    $view = listefile();
    
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
        include('../Admin/vliste.php');

    }
}
elseif(user_co())
{
    $id = $_SESSION['idUser'];
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
        include('../Admin/vliste.php');

    }
    
    
}
else
{
    
   
    ?>
    <div class="alert alert-danger" role="alert">
    Vous devez vous connecter pour acceder a cette ressource!!
</div>
<?php
    
}

?>