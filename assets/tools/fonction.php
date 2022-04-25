<?php
// Etablir la ion avec la base de donnée
include("baseDeDonnee.php");


// La liste de tout les invites
function listerInvite($info)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant ; ";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         //Tout les elements qu'on veut afficher
          $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Statut']=$ligne->Statut;
          $info[$i]['nom']=$ligne->Nom;
          $info[$i]['prenom']=$ligne->Prenom;
          $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
          $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
          $info[$i]['Email']=$ligne->Email;
          $info[$i]['Date_naissance']=$ligne->Date_naissance;
          $info[$i]['Sexe']=$ligne->Sexe;
          $info[$i]['Adresse']=$ligne->Adresse;
          $info[$i]['Adresse1']=$ligne->Adresse1;
          $info[$i]['codePostal']=$ligne->codePostal;
          $info[$i]['Ville']=$ligne->Ville;
          $info[$i]['Pays']=$ligne->Pays;
          $info[$i]['Mobile']=$ligne->Mobile;
          $info[$i]['Societe']=$ligne->Societe;
          $info[$i]['commentaire']=$ligne->commentaire;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    return $info;
}

//Inserer les données d'un invité dans la base de donnée
function ajouter($unStatut,$unNom,$unPrenom,$unNomHebraique,$unNomHP, $unEmail, $uneDate, $unSexe,$uneAdresse, $uneAdresse1,$uneVille,$unPays, $unCp,  $unMobile, $uneSociete, $unCom)
{
    // Ouvrir une connexion au serveur mysql en s'identifiant
      $connect = connexionBdd();

        $requete="insert into participant "
        ."(Statut,Nom, Prenom,Nom_Hebraique,Nom_hebraique_Parents,Email,Date_naissance,Sexe,Adresse,Adresse1,codePostal,Ville,Pays,Mobile,Societe,commentaire) values ('"
        .$unStatut."','"
        .$unNom."','"
        .$unPrenom."','"
        .$unNomHebraique."','"
        .$unNomHP."','"
        .$unEmail."','"
        .$uneDate."','"
        .$unSexe."','"
        .$uneAdresse."','"
        .$uneAdresse1."',"
        .$unCp.",'"
        .$uneVille."','"
        .$unPays."',"
        .$unMobile.",'"
        .$uneSociete."','"
        .$unCom."');";
        
          // Lancer la requ�te d'ajout 
          $ok=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        
          // Si la requ�te a r�ussi
          if ($ok)
          {
            $message = "l'invite a bien ete ajoute";
          //   ajouterErreur($tabErr, $message);
          }
          else
          {
            $message = "L'invite n'a pas ete ajoute !!!";
          //   ajouterErreur($tabErr, $message);
          } 
}




//on recupere le nom et prenom pour ajouter ou modifier un don
function getnom($unID)
{
  $connect=connexionBdd();  
  
  if (TRUE) 
  {
    $requete="SELECT Nom,Prenom from participant where Id_part =$unID;";
    $jeuResultat=$connect->query($requete);
    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      $info = array();
      if($ligne)
      {
        $info[0]['Nom']=$ligne->Nom;
        $info[0]['Prenom']=$ligne->Prenom;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
      }
  }
  $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  return $info;
}


// Lister des informations d'un seul invité pour pouvoir le modifier 
function listerUser($id)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant where Id_part =" . $id;
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
          $info['Id_part']=$ligne->Id_part;
          $info['Statut']=$ligne->Statut;
          $info['nom']=$ligne->Nom;
          $info['prenom']=$ligne->Prenom;
          $info['Nom_Hebraique']=$ligne->Nom_Hebraique;
          $info['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
          $info['Email']=$ligne->Email;
          $info['Date_naissance']=$ligne->Date_naissance;
          $info['Sexe']=$ligne->Sexe;
          $info['Adresse']=$ligne->Adresse;
          $info['Adresse1']=$ligne->Adresse1;
          $info['codePostal']=$ligne->codePostal;
          $info['Ville']=$ligne->Ville;
          $info['Pays']=$ligne->Pays;
          $info['Mobile']=$ligne->Mobile;
          $info['Societe']=$ligne->Societe;
          $info['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    return $info;
}




//rechercher un ou plusieurs invités 
function searchglobal($info,$nom,$prenom,$mail)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      $requete="select * from participant  where Nom LIKE '".$nom."%' OR  Prenom LIKE '".$prenom."%' OR Email LIKE '".$mail."%';"; 
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         $info[$i]['Statut']=$ligne->Statut;  
        $info[$i]['Id_part']=$ligne->Id_part;  
        $info[$i]['nom']=$ligne->Nom;
        $info[$i]['prenom']=$ligne->Prenom;
        $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
        $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
        $info[$i]['Email']=$ligne->Email;
        $info[$i]['Date_naissance']=$ligne->Date_naissance;
        $info[$i]['Sexe']=$ligne->Sexe;
        $info[$i]['Adresse']=$ligne->Adresse;
        $info[$i]['Adresse1']=$ligne->Adresse1;
        $info[$i]['codePostal']=$ligne->codePostal;
        $info[$i]['Ville']=$ligne->Ville;
        $info[$i]['Pays']=$ligne->Pays;
        $info[$i]['Mobile']=$ligne->Mobile;
        $info[$i]['Societe']=$ligne->Societe;
        $info[$i]['Statut']=$ligne->Statut;
        $info[$i]['commentaire']=$ligne->commentaire;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
         
      }
  }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    return $info;
}


//recuperer les donnes d'un invité pour le modifier
function modifier($unID,$unStatut,$unNom,$unPrenom,$unNomHebraique,$unNomHP,$unEmail,$uneDate,$unSexe,$uneAdresse,$uneAdresse1,$unCp,$uneVille,$unPays,$unMobile,$uneSociete,$unCom)
{
  // Ouvrir une connexion au serveur mysql en s'identifiant
   $connect = connexionBdd();
   $requete="UPDATE participant SET Statut='".$unStatut."',Nom='".$unNom."',Prenom='".$unPrenom."',Nom_hebraique='".$unNomHebraique."',Nom_hebraique_Parents='".$unNomHP."', Email='".$unEmail."',Date_naissance='".$uneDate."',Sexe='".$unSexe."',Adresse='".$uneAdresse."',Adresse1='".$uneAdresse1."',codePostal=".$unCp.",Ville='".$uneVille."',Pays='".$unPays."',Mobile=".$unMobile.",Societe='".$uneSociete."',commentaire='".$unCom."' WHERE Id_part=".$unID.";";
     
   // Lancer la requ�te d'ajout 
    $ok=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
      
      // Si la requ�te a r�ussi
      if ($ok)
      {
        $message = "l'invite a bien ete modifie";
      //   ajouterErreur($tabErr, $message);
      }
      else
      {
        $message = "L'invite n'a pas ete modifie !!!";
      //   ajouterErreur($tabErr, $message);
      } 

}

// //pour supprimer un invite, on va chercher avec son id via la demande (mail)
// function GETID($ref)
// {
//   $connexion = connexionBdd();
    
//   $fleur = array();
//   $requete="select Id_part from participant where email='".$ref."';";
//     echo $requete;
//     $jeuResultat=$connexion->query($requete);
//    $ligne = $jeuResultat->fetch();
//    if($ligne)
//    {
//      $ID = $ligne['Id_part'];
     
//    }
//    return($ID);
// }


// //pour supprimer un id, on le fait avec son id 
// function supprimer2($ref)
// {
//     $connexion = connexionBdd();
    
//     $fleur = array();
//     $requete="select * from participant where email='".$ref."';";
//       $jeuResultat=$connexion->query($requete);
//      $ligne = $jeuResultat->fetch();
//      if ($ligne)
//      { 
//         //requete pour supprimer tout ce qui concerne cette id dans toutes la bdd 
//       $requete="SET FOREIGN_KEY_CHECKS = 0; delete from participant  where email='".$ref."';";
    
//     // Lancer la requ�te supprimer
//         $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
//         // Si la requ�te a �chou�
//         if ($ok==FALSE)
//         {
//           $message = "Attention, la suppression de la fleur a �chou� !!!";
//           echo $requete;
         
//         }
//         else
//         {
//           echo $requete;
//         }
//        }
//        else
//        {
//         $message="Echec de la suppression : la r�f�rence n'existe pas";
        
//        } 
      

// }
//supprimer un invite avec son id
function supprimerInvite2($info)
{

  $connexion = connexionBdd();
  if (TRUE) 
  {
      
        // $a= date('d-m-y');
        $requete="SET FOREIGN_KEY_CHECKS = 0; delete from participant  where id_part='".$info."';";
       
      $jeuResultat=$connexion->query($requete);
      echo $requete;

  }


#################################################### FONCTIONS DONS/LOTS ###############################################################################################################################################

  
//les informatiosn d'un don pour l'enregistrer dans la bdd
function ajouter_dons($unIdpart,$unLibelle,$untypeDons, $unMontant,$unTypeReg,$estRegle,$dateReg,$comm)
{
    $connect = connexionBdd();
    $requete="SELECT p.nom, d.idDon, p.Id_part, d.libelle, d.typeDon,d.Montant, d.typeReglement, d.estRegle FROM participant p inner join don d on p.Id_part=d.Id_part where p.Id_part=".$unIdpart.";";
    $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le r�sultat soit r�cup�rable sous forme d'objet     
    $ligne = $jeuResultat->fetch();

          
    $requete="INSERT INTO (Id_part,Libelle,typeDon, Montant,typeReglement,estRegle,dateReglement,commentaire) values ("
    .$unIdpart.",'"
    .$unLibelle."','"
    .$untypeDons."',"
    .$unMontant.",'"
    .$unTypeReg."','"
    .$estRegle."','"
    .$dateReg."','"
    .$comm."');";
    $ok=$connect->query($requete);
    var_dump($requete);
    if ($ok)
    {
      $message = "l'invite a bien ete ajoute";
    }
    else
    {
      $message = "L'invite n'a pas ete ajoute !!!";
    } 

}




// la liste de tout les dons avec les noms des donateurs 
function lister_donsEntier()
{
  $connect=connexionBdd();  
      $requete="SELECT don.idDon, participant.Nom, participant.Prenom , participant.Email, don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part; ";
    
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          //Tout les elements qu'on veut afficher
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Nom']=$ligne->Nom;
          $info[$i]['Prenom']=$ligne->Prenom;
          $info[$i]['Email']=$ligne->Email;
          $info[$i]['Libelle']=$ligne->Libelle;
          $info[$i]['typeDon']=$ligne->typeDon;
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['typeReglement']=$ligne->typeReglement;
          $info[$i]['estRegle']=$ligne->estRegle; 
          $info[$i]['dateReglement']=$ligne->dateReglement;
          $info[$i]['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
         
      }
    
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}

//Afficher tout les dons une personne
function lister_dons($unID)
{
  $connect=connexionBdd();  
  
  if (TRUE) 
  {
      
    
      $requete="SELECT don.idDon, participant.Nom, participant.Prenom , don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where participant.Id_part=".$unID.";";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      $info = array();
      while($ligne)
      {
          // echo($requete);
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Nom']=$ligne->Nom;
          $info[$i]['Prenom']=$ligne->Prenom;
          $info[$i]['Libelle']=$ligne->Libelle;
          $info[$i]['typeDon']=$ligne->typeDon;
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['typeReglement']=$ligne->typeReglement;
          $info[$i]['estRegle']=$ligne->estRegle;
          $info[$i]['dateReglement']=$ligne->dateReglement;
          // $info[$i]['nom']=$ligne->nom;
          $info[$i]['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    return $info;
}


//on recupere le nom et prenom pour ajouter ou modifier un don
function getnomdon($unID)
{
    $connect=connexionBdd();  
    $requete="SELECT p.Nom,p.Prenom from participant p INNER JOIN don d on p.Id_part = d.Id_part where d.idDon=$unID;";
    $jeuResultat=$connect->query($requete);
    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      $info = array();
      if($ligne)
      {
        $info[0]['Nom']=$ligne->Nom;
        $info[0]['Prenom']=$ligne->Prenom;
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
      }
  
  $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  
  return $info;
}

//rechercher un don par la date
function searchglobalDon($info,$date)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
    $requete="SELECT don.idDon, participant.Nom, participant.Prenom , participant.email, don.Libelle, don.typeDon, don.Montant, don.typeReglement, don.estRegle, don.dateReglement, don.commentaire from participant INNER JOIN don on participant.Id_part = don.Id_part where   don.dateReglement ='".$date."'"; 
    
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Nom']=$ligne->Nom;
          $info[$i]['Prenom']=$ligne->Prenom;
          $info[$i]['Email']=$ligne->email;
          $info[$i]['Libelle']=$ligne->Libelle;
          $info[$i]['typeDon']=$ligne->typeDon;
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['typeReglement']=$ligne->typeReglement;
          $info[$i]['estRegle']=$ligne->estRegle; 
          $info[$i]['dateReglement']=$ligne->dateReglement;
          $info[$i]['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
         
      }
  }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    return $info;
}





//modifier un don
function listerIDDONS($info,$unID)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      $requete="select * from don where idDon =".$unID.";";
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Libelle']=$ligne->Libelle;  
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['date']=$ligne->Montant;
          $info[$i]['commentaire']=$ligne->commentaire;
          
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    return $info;
   
}


//modifier les infos d'un don
function modifierDon($unID,$unLibelle,$unType,$unMontant,$unRegle,$unEstPaye,$unDate,$unCom)

{
  // Ouvrir une connexion au serveur mysql en s'identifiant
    $connect = connexionBdd();
    
    $requete="UPDATE don SET ";
    $requete=$requete."Libelle='".$unLibelle."',typeDon='".$unType."',Montant='".$unMontant."',typeReglement='".$unRegle."',estRegle='".$unEstPaye."', dateReglement='".$unDate."',commentaire='".$unCom."' WHERE idDon=".$unID.";";
    
      // Lancer la requ�te d'ajout 
      $ok=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
      
    
      // Si la requ�te a r�ussi
      if ($ok)
      {
        $message = "l'invite a bien ete modifie";
      //   ajouterErreur($tabErr, $message);
      }
      else
      {
        $message = "L'invite n'a pas ete modifie !!!";
      //   ajouterErreur($tabErr, $message);
      } 
      return $requete;

}

//supprimer un don via son id
function supprimerDon2($don)
{

  $connexion = connexionBdd();
  if (TRUE) 
  {
      
        // $a= date('d-m-y');
      $requete="delete from don where idDon= $don;";
       
      $jeuResultat=$connexion->query($requete);
      echo $requete;

  }
}
     



//lister un invite
function listerID($info,$unID)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant where Id_part=".$unID.";";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          // echo($requete);
          $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Statut']=$ligne->Statut;  
          $info[$i]['nom']=$ligne->Nom;
          $info[$i]['prenom']=$ligne->Prenom;
          $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
          $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
          $info[$i]['Email']=$ligne->Email;
          $info[$i]['Date_naissance']=$ligne->Date_naissance;
          $info[$i]['Sexe']=$ligne->Sexe;
          $info[$i]['Adresse']=$ligne->Adresse;
          $info[$i]['Adresse1']=$ligne->Adresse1;
          $info[$i]['codePostal']=$ligne->codePostal;
          $info[$i]['Ville']=$ligne->Ville;
          $info[$i]['Pays']=$ligne->Pays;
          $info[$i]['Mobile']=$ligne->Mobile;
          $info[$i]['Societe']=$ligne->Societe;
          $info[$i]['Statut']=$ligne->Statut;
          $info[$i]['commentaire']=$ligne->commentaire;
          
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
   
}



//afficher un don 
function listerIdDon($unID)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from don where idDon=".$unID.";";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      echo $requete;
      while($ligne)
      {
          // echo($requete);
          $info[$i]['idDon']=$ligne->idDon;
          $info[$i]['Libelle']=$ligne->Libelle;
          $info[$i]['typeDon']=$ligne->typeDon;
          $info[$i]['Montant']=$ligne->Montant;
          $info[$i]['typeReglement']=$ligne->typeReglement;
          $info[$i]['estRegle']=$ligne->estRegle;
          $info[$i]['dateReglement']=$ligne->dateReglement;
          $info[$i]['commentaire']=$ligne->commentaire;
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
      }
    }
    $jeuResultat->closeCursor();   
    return $info;
   
}


function lister($info)
{
  $connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from participant ";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
          // echo($requete);
          // $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Id_part']=$ligne->Id_part;
          $info[$i]['Statut']=$ligne->Statut;
          $info[$i]['nom']=$ligne->Nom;
          $info[$i]['prenom']=$ligne->Prenom;
          $info[$i]['Nom_Hebraique']=$ligne->Nom_Hebraique;
          $info[$i]['Nom_hebraique_Parents']=$ligne->Nom_hebraique_Parents;
          $info[$i]['Email']=$ligne->Email;
          $info[$i]['Date_naissance']=$ligne->Date_naissance;
          $info[$i]['Sexe']=$ligne->Sexe;
          $info[$i]['Adresse']=$ligne->Adresse;
          $info[$i]['Adresse1']=$ligne->Adresse1;
          $info[$i]['codePostal']=$ligne->codePostal;
          $info[$i]['Ville']=$ligne->Ville;
          $info[$i]['Pays']=$ligne->Pays;
          $info[$i]['Mobile']=$ligne->Mobile;
          $info[$i]['Societe']=$ligne->Societe;
          $info[$i]['commentaire']=$ligne->commentaire;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      
    }
    $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
    // deconnecterServeurBD($idConnexion);
    return $info;
}

}
?>