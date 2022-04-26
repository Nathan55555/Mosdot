
<div id="rechercher1">
  <h2>Liste des Fichiers</h2> 

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
    $i = 0;
  
    while($i<count($view))
    { 
        
 ?>  
    <tr>
      <th scope="row"><?php echo $view[$i]['ID']?></th>
      <td><a href="<?php echo $view[$i]['Path']?>"><?php echo $view[$i]['Nom']?></a></td>
      <td><?php echo $view[$i]['Date']?></td>
      
    </tr>
    <?php
        $i = $i + 1;
     }
     
?> 
   
  </tbody>
</table>