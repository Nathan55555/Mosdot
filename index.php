<?php
include('tools/fonction.php');
include('nav-main.php');
if(count($_POST)==0)
{
  
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
        header('Location:index.php');
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