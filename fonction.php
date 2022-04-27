
<?php

function connexionBdd(){
    $PARAM_hote='172.18.0.3'; // le chemin vers le serveur
    $PARAM_port='3306';
    $PARAM_nom_bd='Files'; // le nom de votre base de donnee
    $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe='password'; // mot de passe de l'utilisateur pour se connecter
    $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    return $connect;

    
   }




function user_co(){ //si un utilistauer de categorie 'user' est connecter 
    $connecte = false;
    if (isset($_SESSION["loginUser"]))
    {
        if ($_SESSION["catUser"]=="user")
        {
           $connecte = true; 
        }
    }
    
    return $connecte;
}
function connecter() //si n'importe qui est connecter

{
  $connect = False;
  if(isset($_SESSION['loginUser']))
  {
    $connect = True;
  }
  return $connect;

}

function deletefile($id) //suprime le fichier de la bdd
{
  $connect = connexionBdd();
  $requete = "delete from Files_Uploads where id = $id ;";
  $ok=$connect->query($requete);
  echo $requete; 

}



function ajoutfile($date,$name,$unique,$id)//ajoute le fichier a la bdd
{
    $connect = connexionBdd();
    $requete='INSERT INTO Files_Uploads (`nom`,`unique_name`,`date`,`id_users`) VALUES ("'.$name.'","'.$unique.'","'.$date.'",'.$id.');';
    $ok=$connect->query($requete);
  
    
}
function listefile()//liste tout les fichier reserver pour l'admin
{
$connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from Files_Uploads ";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         
          $info[$i]['ID']=$ligne->id;
          $info[$i]['Nom']=$ligne->nom;
          $info[$i]['Path']=$ligne->unique_name;
          $info[$i]['Date']=$ligne->date;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      if(!isset($info))
      {
        $info = 0;
      }

      $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
      // deconnecterServeurBD($idConnexion);
      return $info;
      
    }
   
}
function listefile_user($id)//liste les fichier du users Connecter
{
$connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from Files_Uploads where id_users = $id ;";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
  
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         
          $info[$i]['ID']=$ligne->id;
          $info[$i]['Nom']=$ligne->nom;
          $info[$i]['Path']=$ligne->unique_name;
          $info[$i]['Date']=$ligne->date;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      if(!isset($info))
      {
        $info = 0;
      }
      $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
      // deconnecterServeurBD($idConnexion);
      return $info;
      
    }
   
}
function getinfo_file($id)//recupere les infos d'un fichier
{
$connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from Files_Uploads where id = $id ;";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
  
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         
          $info[$i]['ID']=$ligne->id;
          $info[$i]['Nom']=$ligne->nom;
          $info[$i]['Path']=$ligne->unique_name;
          $info[$i]['Date']=$ligne->date;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
      // deconnecterServeurBD($idConnexion);
      return $info;
      
    }
   
}
function identifier($nom, $mdp)//permet de connecter un utilisteurs
{
  $connexion = connexionBdd();
    $requete="select * from users where nom ='".$nom."' and mdp ='".$mdp."' ;";
    $jeuResultat=$connexion->query($requete); 
    $i = 0;
    // echo $requete;
    $ligne = $jeuResultat->fetch();
    if ($ligne)
    {
        $i = $i + 1;
    }
    else
    {
      $ligne = 0;
    }
    $jeuResultat->closeCursor();
  return $ligne;
}

function getusers($nom,$mdp)//recupere tout les informations d'un users tel que son id et sa categorie
{
    $connect = connexionBdd();
    $requete = "select * from users where nom = '".$nom."' and mdp = '".$mdp."';";
    $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        // echo($requete);
        $info[$i]['ID']=$ligne->id;
        $info[$i]['Nom']=$ligne->nom;  
        $info[$i]['Prenom']=$ligne->prenom;
        $info[$i]['Mail']=$ligne->mail;
        $info[$i]['Categorie']=$ligne->cat;
        $info[$i]['Mdp']=$ligne->mdp;
      
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
  
  $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
  // deconnecterServeurBD($idConnexion);
  return $info;
 
}



function deconnecterVisiteur() //deconnecte l'utilisteur
{
    unset($_SESSION["idUser"]);
    unset($_SESSION["loginUser"]);
    unset($_SESSION["catUser"]);
    
}
function verif_login($login)
{
  $connect = connexionBdd();
  $requete="select * from users where nom = '".$login."';";
  $jeuResultat=$connect->query($requete); 
    $i = 0;
    // echo $requete;
    $ligne = $jeuResultat->fetch();
    if($ligne)
    {
      $a = 1;
    }
    else
    {
      $a = 0;
    }

    return $a;
}
function signin($login,$mail,$mdp)
{
     $connect = connexionBdd();
     if(verif_login($login)==1)
     {
       $a = 0;
     }
     else
     {
       $requete = "insert into users (`nom`,`mail`,`mdp`,`cat`) VALUES ('".$login."','".$mail."','".$mdp."','user');";
       $ok=$connect->query($requete);
      //  echo $requete;
       $a=1;

     }
     return $a;
}
function estAdministrateurConnecte() //si un utilistauer de categroie 'admin' est connecter 
{
    $connecte = false;
    if (isset($_SESSION["loginUser"]))
    {
        if ($_SESSION["catUser"]=="admin")
        {
           $connecte = true; 
        }
    }    
    return $connecte;
}
function editsession($id, $login, $cat) {//initialise la session quand la connexion a reussi
    $_SESSION["idUser"] = $id;
    $_SESSION["loginUser"] = $login;
    $_SESSION["catUser"] = $cat;
}
?>