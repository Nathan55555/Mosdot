
<div id="rechercher1">
  <h2>Liste des Fichiers User: <?php if(isset($view[0]['a'])){ echo $view[0]['a'];}?></h2> 
  <?php

  ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Date</th>
      <th scope="col">Edit</th>
      
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
      <td><a href="<?php echo $view[$i]['Path']?>" target="_blank" ><?php echo $view[$i]['Nom']?></a></td>
      <td><?php echo $view[$i]['Date']?></td>
      <td><a href="delete_file.php?id=<?php echo $view[$i]['ID'];?>&path=<?php echo $view[$i]['Path']?> "  ><button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></a></td>
      
    </tr>
    <?php
        $i = $i + 1;
     }
     
?> 
   
  </tbody>
</table>