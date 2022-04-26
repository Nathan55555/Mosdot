<?php
include('fonction.php');
if(count($_FILES)==1)
{
   $maxsize = 7000;
   $filesize=$_FILES['file']['size'];
   if($filesize>$maxsize)
   {
       echo "La taille maximal pour importer un fichier est de 7000 Octets";
   }
   else
   {
      $filename = $_FILES['file']['name'];
      $date=date("d/m/Y");
      echo $_SESSION["loginUser"];
    //   $tmp=$_FILES['file']['tmp_name'];
    //   $nameid = md5(uniqid(rand(), true));
    //   $filename1= "Files/".$nameid.".sql";
    //   $resultat = move_uploaded_file($tmp,$filename1);
    //   ajoutfile($date,$filename,$filename1);
    //   header('Location:liste.php');

   
      
   }
    
}
else
{
    echo "";
}
include('vue.php');
?>