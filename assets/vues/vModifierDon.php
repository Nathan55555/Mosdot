<html>
<head><meta charset="utf-8" /></head>
<body>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 paddings-input flex-flex flex-justifyContent--center">
          <h1><a href="http://blog.stackfindover.com/" rel="dofollow"></a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Entrez les Information du Don</span>
              <form class="formulaire" id="stripe-login" name="ajouter" action="" method="post">
             
              <div class="form-part">
                  <div class="field paddings-input">
                      <label >Nom</label>
                      <input type="text" name="nom" size="20" value="<?php  echo $don['Libelle']; ?>" /> <br />
                  </div>
                  <div class="field paddings-input">
                      <label >Prénom</label>
                      <input type="text" name="prenom" size="10"  value="<?php  echo $don['prenom']; ?>"/><br /> 
                  </div>
                  <div class="field paddings-input">
                    <label >Libelle</label>
                    <input type="text" name="Libelle" value="<?php  echo $don['Libelle']; ?>">
                  </div>
                
                  <div class="paddings-input">
                    <label >Type de dons</label>
                    <!-- <input  name="Type_Dons"> -->
                    <input name="Type_Dons" type="radio" value="Entree" checked="checked" >Entrée
                    <input name="Type_Dons" type="radio" value="Lot">Lot
                    <input name="Type_Dons" type="radio" value="Don">Don
                  </div>
                  <div class="paddings-input">
                  <label>Mode de payement :</label> 
                  <input name="typeReglement" type="radio" value="Espece" checked="checked">Espece
                  <input name="typeReglement" type="radio" value="Carte Bancaire">Carte Bancaire
                  <input name="typeReglement" type="radio" value="Cheque">Cheque
                  <input name="typeReglement" type="radio" value="PayPal">PayPal
                  <input name="typeReglement" type="radio" value="AlloDons">AlloDons
                  <input name="typeReglement" type="radio" value="Virement">Virement
                  </div>
              </div>

              <div class="form-part">
                <div class="field paddings-input">
                  <label required >Montant du Reglement</label>
                  <input  name="paiement" value="<?php   echo $don['Montant']; ?>" required>
                </div>
                <div class="paddings-input">
                <label>Etats du Reglement:</label> 
                <input name="estRegle" type="radio" value="Payé" checked="checked">Payé
                <input name="estRegle" type="radio" value="Impayé">Impayé
                </div>
                <div class="field paddings-input">
                  <label >Date du Reglement</label>
                  <input id="changemoi" type="date" value="<?php   echo $don['date']; ?>">
                </div>
              </div>

              <div class="form-part">
                <div class="field paddings-input">
                  <label >Commentaire</label>
                  <input type="text" name="com" value="<?php  echo $don['commentaire']; ?>">
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