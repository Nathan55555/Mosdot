<html><meta charset="utf-8" /><head><link rel="stylesheet" type="text/css" href="assets/css/style.css"></head></html>

<html>
<body>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow"></a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Entrez les coordonnées d'un invite pour le modifier</span>
              <form class="formulaire" id="stripe-login" name="ajouter" action="" method="post">
              
              <div class="form-part">
                  
                  <div class="field paddings-input">
                      <label >Nom</label>
                      <input type="text" name="nom" size="20" value="<?php  echo $invite['nom']; ?>" /> <br />
                  </div>
                  
                  <div class="field paddings-input">
                      <label >Statut</label>
                      <input type="text" name="Statut" size="20" value="<?php  echo $invite['Statut']; ?>" /> <br />
                  </div>
                  
                    
                  <div class="field paddings-input">
                      <label >Prénom</label>
                      <input type="text" name="prenom" size="10"  value="<?php  echo $invite['prenom']; ?>"/><br /> 
                  </div>
                  <div class="field paddings-input">
                      <label >Prénom Hébraique</label>
                      <input type="text" name="prenomHebraique" size="10" value="<?php  echo $invite['Nom_Hebraique']; ?>"/><br />
                  </div>
              </div>
                  
              <div class="form-part">

                  <div class="field paddings-input">
                      <label >Nom Hebraique des Parents</label>
                      <input type="text" name="nom_HP" value="<?php  echo $invite['Nom_hebraique_Parents']; ?>">
                  </div>
                  
                  <div class="field paddings-input">
                    <label for="email">Email</label>
                    <input type="text" name="email" size="10"  value="<?php  echo $invite['Email']; ?>" /><br />
                  </div>
                  
                  <div class="field paddings-input">
                    <label >Date de naissance</label>
                    <input type="date" name="date" value="<?php  echo $invite['Date_naissance']; ?>" /><br />
                  </div>
                  <div class="paddings-input">
                    <label>Sexe :</label> 
                    <?php  if($invite['Sexe'] == "M") {

                      echo '<input name="sexe" type="radio" value="M" checked="checked">M
                      <input name="sexe" type="radio" value="F">F';
                    } else {
                      echo '<input name="sexe" type="radio" value="M" >M
                      <input name="sexe" type="radio" value="F" checked="checked">F';
                      }
                     ?>
                    
                  </div>
              </div>
              
              <div class="form-part">
                
                  <div class="field paddings-input">
                    <label >Adresse</label>
                    <input type="text" name="adresse" size="25" value=" <?php  echo $invite['Adresse']; ?>"/><br /> 
                  </div>
                  
                  <div class="field paddings-input">
                    <label >Adresse1</label>
                    <input type="text" name="Adresse1" size="10" value=" <?php  echo $invite['Adresse1']; ?>"/><br />
                  </div>
                  
                  <div class="field paddings-input">
                    <label >Pays</label>
                    <input type="text" name="Pays" size="10" value=" <?php  echo $invite['Pays']; ?>"/><br />
                  </div>
                  <div class="field paddings-input">
                      <label >Ville</label>
                      <input type ="text" name="ville" size="20" value="<?php  echo $invite['Ville']; ?>"/>
                  </div>
              </div>

              <div class="form-part">
                
                  <div class="field paddings-input">
                      <label >Code Postal</label>
                      <input type="text" name="cp" size="10"value="<?php  echo $invite['codePostal']; ?>"/><br>
                  </div>
                
                  <div class="field paddings-input">
                      <label >Numéro de Téléphone</label>
                      <input type="text" name="mobile" size="10"  value="<?php  echo $invite['Mobile']; ?>"/><br />
                  </div>
                  
                  <div class="field paddings-input">
                      <label >Nom de Société</label>
                      <input type="text" name="societe" size="20"  value="<?php  echo $invite['Societe']; ?>" /><br />
                  </div>
                  <div class="field paddings-input">
                    <label >Commentaire </label>
                    <input type="text" name="com" size="20"  value="<?php  echo $invite['commentaire']; ?>" /><br />
                  </div>
                  <div class="field paddings-input">
                    <input type="submit" name="submit" value="Enregistrer">
                  </div>
              </div>

                
            
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

