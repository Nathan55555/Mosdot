<?php
include('../tools/fonction.php');
session_start();
include('nav-main.php');
$page = 3;
$id = $_GET['ID'];
$compte = compte_file($id);

$user = getuser_by_id($id);

if(connecter())
{
        if(user_co())
        {
                compte_visite_page($id,$page);
                if(count($_POST)>0)
                {
                       
                        $mdp = $_POST['mdp'];
                        $edit =  edit_compte_user($mdp,$id);
                        if($edit)
                                {
                                    $message = $user[0]['Nom'].' a modifier son Mot de passe !';
                                    add_log($message,$id);
                                ?>
                                <div class="alert alert-success" role="alert">
                                Le compte à été modifier avec succée!
                                </div>
                                <?php
                                }

                }
        }
        else
        {
                compte_visite_page(1,$page);
                if(count($_POST)>0)
                {
                        $file = $_POST['maxfiles'];
                        $mdp = $_POST['mdp'];
                        $edit =  edit_compte_admin($file,$mdp,$id);
                        if($edit)
                                {
                                    $message = $user[0]['Nom'].' a modifier son Mot de passe !';
                                    add_log($message,$id);
                                ?>

                                <div class="alert alert-success" role="alert">
                                Le compte à été modifier avec succée!
                                </div>
                                <?php
                                }

                }
                $stat = view_stat($id);
        }




include('../vues/vcompte.php');
    }
    else
    {
        ?>
        <div class="alert alert-warning" role="alert">
 Vous devez vous connecter pour acceder a cette ressource!
</div>


<?php
$_SESSION['code_error']=1;
header('Location:../index.php');

    }
?>