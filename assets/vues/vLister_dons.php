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
          <!-- <th>Nom</th>
          <th>Prenom</th> -->
          <th>Libelle</th>
          <th>Type Don</th>
          <th>Montant Reglement</th>
          <th>Mode de Reglement</th>
          <th>Statut Reglement</th>
          <th>Date du Reglement</th>
          <!-- <th>Nom Participant</th> -->
          <th>Commentaire</th>
       
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
            
           
            <td><?php echo $don[$i]["Libelle"]?></td>
            <td><?php echo $don[$i]["typeDon"]?></td>
            <td><?php echo $don[$i]["Montant"]?></td>
            <td><?php echo $don[$i]["typeReglement"]?></td>
            <td><?php echo $don[$i]["estRegle"]?></td>
            <td><?php echo $don[$i]["dateReglement"]?></td>
            <td><?php echo $don[$i]["commentaire"]?></td>

            
            
            
       
<?php
        $i = $i + 1;
     }
    //  var_dump($don[0]);
?>       
       </tbody>       
     </table>    
  </div>

 
