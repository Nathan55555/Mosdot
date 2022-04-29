
<br><br>
<?php if(estAdministrateurConnecte())
{
?>
<h2 style="text-align:center;">Mon Compte:</h2>


<br><br>
<div class="container">


<div class="container container-small">
<form>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Login:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="example">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Mes Fichiers</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="0/2">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">MaxFile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" value="2" >
    </div>
  </div>
  <p>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <p></p>
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Pages</th>
      <th scope="col">Compte</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
     
      <td>Thornton</td>
      <td>@fat</td>
    </tr>

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
<form>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Login:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="example">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Mes Fichiers</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="0/2">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
</form>
</div>

</div>
<?php
}?>