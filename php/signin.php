<?php
include('../tools/fonction.php');
include('nav-main.php');
if(count($_POST)==0)
{
    include('../vues/vsignin.php');
}
else
{


$nom = $_POST['nom'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$signin = signin($nom,$mail,$mdp);
if($signin==0)
{
    ?>
    <div class="alert alert-danger" role="alert">
 Le Nom est deja utilisé!
</div>
<?php
 include('../vues/vsignin.php');

}
else
{



$user = getusers($nom,$mdp);
        session_start();
        editsession($user[0]['ID'],$user[0]['Nom'],$user[0]['Categorie']);
        header('Location:files.php');
    }
}

?>