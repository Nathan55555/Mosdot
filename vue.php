<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Document</title>
</head>
<body>
    
    <div class="container">

   
    <label for="">UPLOAD FILE</label>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <br>
        <br>
        <input type="submit" name ="submit"/>
        <!-- <?php   echo "Taille du fichier a importer: ".$filesize." Octets";
        ?> -->
    </form>
    </div>
</body>
</html>