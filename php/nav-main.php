<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <?php
    if(connecter())
    {

    
    if(estAdministrateurConnecte())
    {
      ?>
    <a class="navbar-brand" href="../Admin/index.php">Admin-Interface(Béta edition)</a>
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="files.php">Add File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="liste.php">Mes Fichiers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="liste_users.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view_temp.php">Demande</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="deco.php">deco</a>
        </li>

    <?php
    }
    

    else
    {
      
      ?>
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      <a class="navbar-brand" href="files.php">Home</a>
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="files.php">Add File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="liste.php">Mes Fichiers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="compte.php?ID=<?php echo $_SESSION['idUser'];?>">Mon compte</a>
        </li>
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="deco.php">deco</a>
        </li>


      <?php
    
    }
    }
  else
  {
    ?>
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
     <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="signinv3.php">Signin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">login</a>
        </li>
        <?php
  }
  ?>
    
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </body>