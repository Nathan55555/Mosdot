<?php
include('tools/fonction.php');
session_start();
include('nav-main.php');
if(count($_POST)==0)
{
  if(isset($_SESSION['code_error']))
  {

  
  if($_SESSION['code_error']==1)
  {
    ?>
    <div class="alert alert-warning" role="alert">
Vous devez vous connecter pour acceder a cette ressource!
</div>


<?php
$_SESSION['code_error']=0;
  }
}
  include('vues/vlogin.php');
  
}
else
{
 
  $nom = $_POST['nom'];
  $mdp = $_POST['mdp'];
  if($nom =="" OR $mdp =="")
  {
    
    include('vlogin.php');
  }
  else
  {
    if(verif_temp($nom)==0)
    {

    
    $log = identifier($nom,$mdp);
    if (is_array($log)) 
      { 
        $user = getusers($nom,$mdp);
        session_start();
        editsession($user[0]['ID'],$user[0]['Nom'],$user[0]['Categorie']);
        if($_SESSION['catUser']=='user')
        {
          header('Location:php/files.php');
        }
        else
        {
          header('Location:php/files.php');
        }
       
     
        
  
      }
      else
      {
        ?>
        <div class="alert alert-danger" role="alert">
 Nom d'utilisteur ou Mot de passe incorrecte!
</div>
<?php
include('vues/vlogin.php');
      }
    }
    else
    {
      ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Bonjour <?php echo $nom; ?></strong>, Une demande est déja en cours. Nous faisont le maximum pour y répondre.
</div>
<?php
include('vues/vlogin.php');

    }
    
      
  }
}




?>