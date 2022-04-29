<html><head><link rel="stylesheet" href="assets/css/style.css"></head></html>




<div class="table-wrapper" >

    <table class="fl-table" class="table-wrapper">
       
    <!-- <li class="scroll-to-section"><a href="supprimer.php">Supprimer</a></li> -->
  <br><br><br>
      <?php

   
?>



<div id="rechercher1">
  <h2>Liste des Fichiers</h2> 
 
  </div>
<br>

<thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Date</th>
         
          
          
       
        </tr>
        </thead>
<?php


?>
      </thead>
      <tbody>  
<?php
    $i = 0;
  
    while($i<count($view))
    { 
        
 ?>     
        <tr>
            
            <td><?php echo $view[$i]["ID"] ?></td>
            <td><a href="<?php echo $view[$i]["Path"]?>"><?php echo $view[$i]["Nom"] ?></a></td>
            <td><?php echo $view[$i]["Date"]?></td>
           
            
       
<?php
        $i = $i + 1;
     }
     
?>       
       </tbody>       
     </table>    
  </div>

  

  



 
