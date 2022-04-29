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
    if(verif_login($nom)==1)
    {
        ?>
    <div class="alert alert-danger" role="alert">
 Le Nom d'utilistauer est dejà pris !
</div>
<?php
    }
    else
    {

    

    
    if(verif_temp($nom)==1)
    {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Bonjour <?php echo $nom; ?></strong>, Une demande est déja en cours. Nous faisont le maximum pour y répondre.
</div>
<?php
    }
    else
    {
        if(verif_temp_status($nom,$mdp)==1)
        {
            ?>
            <div class="alert alert-danger" role="alert">
         Votre demande a été refusé. Nous vous remercion pour l'interet que vous porter a notre travail. Cordialement  Le Service Informatique.
        </div>
        <?php
        }
        else
        {

        
        add_users_temp($nom,$mail,$mdp);
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Bonjour <?php echo $nom; ?></strong>, Une demande d'adhesion a été envoyer. Veuillez attendre que l'Administrateur accepte cette derniere.
</div>
<?php
        }

    }
}
include('../vues/vsignin.php');
}


?>