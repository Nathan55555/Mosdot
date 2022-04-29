
<div id="rechercher1">
  <h2>Liste des Logs Users: <?php if(isset($view[0]['Nom'])){ echo $view[0]['Nom'];}?></h2> 
  <?php

  ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Message</th>
      <th scope="col">IP</th>
   
    </tr>
  </thead>
  <tbody>
  <?php
    $i = 0;
    
    while($i<count($view))
    { 
        
 ?>  
    <tr>
      <th scope="row"><?php echo $view[$i]['Date']?></th>
    
      <td><?php echo $view[$i]['Message']?></td>
      <td><?php echo $view[$i]['ip']?></td>
    
      
    </tr>
    <?php
        $i = $i + 1;
     }
     
?> 
   
  </tbody>
</table>