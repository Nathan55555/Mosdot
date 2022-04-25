<html>
<head>
<meta charset="utf-8" />
</head>
<body>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 paddings-input flex-flex flex-justifyContent--center">
          <!-- <h1><a href="http://blog.stackfindover.com/" rel="dofollow"></a></h1> -->
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Entrez les coordonnées d'un invité pour l'ajouter :</span>
              <form class="formulaire" id="stripe-login" name="ajouter" action="" method="post">
              
              <div class="form-part">
                <div class="paddings-input">
                  <label>Type :</label> 
                  <input name="statut" type="radio" value="Invite" checked="checked">Invite
                  <input name="statut" type="radio" value="Donateur">Donateur
                </div>
                <div class="field paddings-input">
                    <label >Nom</label>
                    <input type="text" name="nom" required>
                </div>
                <div class="field paddings-input">
                    <label >Prénom</label>
                    <input  name="prenom" required>
                </div>
                <div class="field paddings-input">
                    <label >Prénom Hébraique</label>
                    <input  name="prenomHebraique">
                </div>
              </div>

              <div class="form-part">
                <div class="field paddings-input">
                    <label >Nom Hébraique des Parents</label>
                    <input type="text" name="nom_HP">
                </div>
                <div class="field paddings-input">
                    <label for="email">Email</label>
                    <input type="text" name="email" required>
                </div>
                <div class="field paddings-input">
                    <label >Date de naissance</label>
                    <input type="date" name="date">
                </div>
                <div class="paddings-input">
                  <label>Sexe :</label> 
                  <input name="sexe" type="radio" value="M" checked="checked">M
                  <input name="sexe" type="radio" value="F">F
                </div>
              </div>

              <div class="form-part">
                <div class="field paddings-input">
                    <label >Adresse</label>
                    <input type="text" name="adresse">
                </div>
                <div class="field paddings-input">
                    <label >Adresse1</label>
                    <input type="text" name="adresse1">
                </div>
                <div class="field paddings-input">
                    <label >Code Postal</label>
                    <input type="text" name="cp">
                </div>
                <div class="field paddings-input">
                    <label >Ville</label>
                    <input type="text" name="ville">
                </div>
              </div>

              <div class="form-part">
                <div class="field paddings-input">
                    <label >Pays</label>
                    <input type="text" name="pays">
                </div>
                  
                <div class="field paddings-input">
                    <label >Numéro de Téléphone</label>
                    <input type="text" name="mobile">
                </div>
                <div class="field paddings-input">
                    <label >Nom de Société</label>
                    <input type="text" name="societe">
                </div>
                  
                <div class="field paddings-input">
                    <label >Commentaire</label>
                    <input type="text" name="com">
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

