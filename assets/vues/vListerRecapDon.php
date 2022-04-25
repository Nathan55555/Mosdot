<html><head><meta charset="utf-8" /><link rel="stylesheet" href="assets/css/style.css"></head></html>



<!-- <div class="table-wrapper">
    <table class="fl-table" > -->
<div class="table-wrapper" >

    <table class="fl-table" class="table-wrapper">
     
      <?php
     
if (count($don)>0)
{
    // echo(count($don))
?>

<br><br><br>

<h2>Liste des Dons</h2>
<br>
<thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th> 
          <th>Mail</th>
          <th>Libelle</th>
          <th>Type Don</th>
          <th>Montant </th>
          <th>Statut Reglement</th>
          <th>Date du Reglement</th>
          <th>Commentaire</th>
          <th>Modifier</th>
          <th>Supprimer</th>
       
        </tr>
        </thead>
<?php

}

?>
      </thead>
      <tbody>  
<?php
    $i = 0;
    while($i<count($don))
    { 
        
 ?>     
        <tr>
            <td><?php echo $don[$i]["idDon"]?></td> 
            <td><?php echo $don[$i]["Nom"]?></td> 
            <td><?php echo $don[$i]["Prenom"] ?></td>
            <td><?php echo $don[$i]["Email"]?></td>
            <td><?php echo $don[$i]["Libelle"]?></td>
            <td><?php echo $don[$i]["typeDon"]?></td>
            <td><?php echo $don[$i]["Montant"]?></td>
            <td><?php echo $don[$i]["estRegle"]?></td>
            <td><?php echo $don[$i]["dateReglement"]?></td>
            <td><?php echo $don[$i]["commentaire"]?></td>
            <td><a href='../php/modifierDon.php?ID=<?php echo $don[$i]["idDon"] ?>'>Modifier</a></td>
            <td><a href='../php/supprimerDon.php?ID=<?php echo $don[$i]["idDon"] ?>'>Supprimer</a></td>

            

            
            
            
       
<?php
        $i = $i + 1;
     }
    //  var_dump($don[0]);
     
?>       
       </tbody>       
     </table>    
  </div>

 
