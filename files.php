<?php
include('fonction.php');

session_start();
include('nav-main.php');

if(connecter() )
{

if(count($_FILES)==1)
{
   $maxsize = 10000000;
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
die;
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
      $filename1= "Files/".$nameid.$filext;
      $resultat = move_uploaded_file($tmp,$filename1);
      ajoutfile($date,$filename,$filename1,$id);
    //   header('Location:liste.php');

   
      
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
include('vue.php');

}
else
{
    
    ?>
    <div class="alert alert-danger" role="alert">
  ERREUR 404!
</div>
<?php
}
?>