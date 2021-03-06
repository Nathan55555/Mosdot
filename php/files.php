<?php
include('../tools/fonction.php');

session_start();
include('nav-main.php');
$page = 1;
$id = $_SESSION['idUser'];

if(connecter() )
{
  
   if(verif_stat_id($id,$page)==1)
   {
      update_compte($id,$page);
   }
   else
   {
      compte_visite($id,$page);
   }

if(count($_FILES)==1)
{
   $maxsize = 10000000000000;
   $filesize=$_FILES['file']['size'];
   $ext = array('.pdf','.PDF');
   $filext = ".".strtolower(substr(strrchr($_FILES['file']['name'], '.'), 1));
   
   if($filesize>$maxsize)
   {
       ?>
       <div class="alert alert-danger" role="alert">
  Le fichier est trop volumineux. Taille max: <?php echo $maxsize;?>. Taille du Fichier: <?php echo $filesize;?>.
</div>
<?php

   }
   elseif(!in_array($filext,$ext))
   {
    ?>
    <div class="alert alert-danger" role="alert">
Veuillez importer que des fichiers PDF !
</div>
<?php

   }

   else
   {
      $filename = $_FILES['file']['name'];
      
      $id = $_SESSION['idUser'];
      $date=date("d/m/Y");  
      $tmp=$_FILES['file']['tmp_name'];
      $nameid = md5(uniqid(rand(), true));
      $filename1= "../Files/".$nameid.$filext;
      $resultat = move_uploaded_file($tmp,$filename1);
      ajoutfile($date,$filename,$filename1,$id);
      $message = $_SESSION['loginUser'].' a rajouter le fichier '.$filename;
       add_log($message,$id);
      header('Location:liste.php');

   
      
   }
    
}
else
{
    echo "";
}



?>
<div class="alert alert-success" role="alert">
Bonjour <?php echo $_SESSION['loginUser'];?> !
</div>
<?php
include('../vues/vue.php');

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