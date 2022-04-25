<html><head><meta charset="utf-8" /><link rel="stylesheet" href="assets/css/style.css"></head></html>


<div class="table-wrapper" >

    <table class="fl-table" class="table-wrapper">
     
      
      <?php
if (count($invite1) > 0)
{
    // echo(count($invite1))
?>
<br><br><br>

<h2>Liste des Invités</h2>
<br>
<thead>
        <tr>
         
          <th>ID</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Nom hébraique</th>
          <th>Adresse</th>
          <th>Adresse1</th>
          <th>Ville</th>
          <th>Code Postal</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Societe</th>
         </tr>
<?php
}
// else
// {
//  echo "<h1>Aucune fleur ne correspond a votre recherche</h1>";
// }
?>
      </thead>
      <tbody>  
<?php
    $i = 0;
    while($i < count($invite1))
    { 
        
 ?>     
        <tr>
            
            <!-- <td align="center"><img class="img-polaroid" src="../images/.jpg" /></td> -->
            <td><?php echo $invite1[$i]["Id"] ?></td>
            <td><?php echo $invite1[$i]["nom"] ?></td>
            <td><?php echo $invite1[$i]["prenom"]?></td>
            <td><?php echo $invite1[$i]["nom_hebraique"]?></td>
            <td><?php echo $invite1[$i]["Sexe"]?></td>
            <td><?php echo $invite1[$i]["Adresse"]?></td>
            <td><?php echo $invite1[$i]["Adresse1"]?></td>
            <td><?php echo $invite1[$i]["Ville"]?></td>
            <td><?php echo $invite1[$i]["codePostal"]?></td>
            <td><?php echo $invite1[$i]["Email"]?></td>
            <td><?php echo $invite1[$i]["Mobile"]?></td>
            <td><?php echo $invite1[$i]["Societe"]?></td>
         </tr>
<?php
        $i = $i + 1;
     }
?>       
       </tbody>       
     </table>    
  </div>

 
