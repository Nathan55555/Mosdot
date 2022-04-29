
<br><br>
<?php if(estAdministrateurConnecte())
{
?>
<h2 style="text-align:center;">Compte: <?php echo $user[0]['Nom'];?></h2>


<br><br>
<div class="container">


<div class="container container-small">
<form  method="POST">
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Login:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $user[0]['Nom'];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $user[0]['Mail'];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Mes Fichiers</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $compte;?>/<?php echo $user[0]['Maxfiles'];?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">MaxFile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" name="maxfiles"value="<?php echo $user[0]['Maxfiles'];?>" >
    </div>
  </div>
  <p>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="mdp" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <p></p>
  <button type="submite" class="btn btn-success">Update</button>
  <p></p>
  <table class="table table-bordered table-dark">
  <thead>
  
    <tr>
      <th scope="col">Pages</th>
      <th scope="col">View</th>
    
    </tr>
   
  </thead>
  <tbody>
  <?php
    $i = 0;
  
    while($i<count($stat))
    { 
        
 ?>  
    <tr>
    
      <td><?php echo $stat[$i]['Nom'];?></td>
      <td><?php echo $stat[$i]['Compte'];?></td>
    </tr>
    <?php
        $i = $i + 1;
     }
     
?> 
 
  </tbody>
</table>
</form>
</div>

</div>
<?php
}
else{?>
<h2 style="text-align:center;">Mon Compte:</h2>


<br><br>
<div class="container">


<div class="container container-small">
<form  method="POST">
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Login:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $user[0]['Nom'];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $user[0]['Mail'];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label"><a href="../php/liste.php?ID=<?php echo $user[0]['ID'];?>">Mes Fichiers</a> </label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $compte;?>/<?php echo $user[0]['Maxfiles'];?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="mdp" placeholder="Password">
    </div>
  </div>
  <button type="submite" class="btn btn-success">Update</button>
</form>

</div>

</div>
<?php
}?>