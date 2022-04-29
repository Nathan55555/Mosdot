
<?php

function connexionBdd(){
    $PARAM_hote='172.18.0.4'; // le chemin vers le serveur
    $PARAM_port='3306';
    $PARAM_nom_bd='Files'; // le nom de votre base de donnee
    $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe='password'; // mot de passe de l'utilisateur pour se connecter
    $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    return $connect;

    
   }
   function get_info_temp($id)
   {
     $connect = connexionBdd();
     $requete = "Select * from users_temp where id_users_temp = $id;";
     $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
     $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
     $i = 0;
     $ligne = $jeuResultat->fetch();
     while($ligne)
     {
       $info[$i]['ID']=$ligne->id_users_temp;
       $info[$i]['Nom']=$ligne->nom;
       $info[$i]['Prenom']=$ligne->prenom;
       $info[$i]['Mail']=$ligne->mail;
       $info[$i]['Mdp']=$ligne->mdp;
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

   function temp_valide($id)
   {
    $connect = connexionBdd();
    $requete = "UPDATE `users_temp` SET `statut`='Validé' WHERE id_users_temp = $id;";
    $ok=$connect->query($requete);


   }
   function temp_refuse($id)
   {
    $connect = connexionBdd();
    $requete = "UPDATE `users_temp` SET `statut`='Refusé' WHERE id_users_temp = $id;";
    $ok=$connect->query($requete);

   }

   
function liste_all_temps()
{
  $connect = connexionBdd();
  $requete="Select * from users_temp where statut = 'En cours';";
  $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
  $i = 0;
  $ligne = $jeuResultat->fetch();
  while($ligne)
  {
    $info[$i]['ID']=$ligne->id_users_temp;
    $info[$i]['Nom']=$ligne->nom;
    $info[$i]['Prenom']=$ligne->prenom;
    $info[$i]['Mail']=$ligne->mail;
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

function verif_temp($nom)
{
  $connect = connexionBdd();
  $requete = "select * from users_temp where nom = '".$nom."'  and statut = 'En cours';";
  $jeuResultat=$connect->query($requete); 
  $ligne = $jeuResultat->fetch();
  if($ligne)
  {

     $a = 1;
  }
  else
  {
    $a = 0;
  }
  $jeuResultat->closeCursor();
return $a;
}
function get_all_log()
{
  $connect = connexionBdd();
  $requete = "select * from log_users ORDER by date DESC;";
  $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
  $i = 0;
  // echo $requete;
  $ligne = $jeuResultat->fetch();
  while($ligne)
  {
  
    $info[$i]['Date']=$ligne->date;
    $info[$i]['Message']=$ligne->Message;
   
    $info[$i]['ip']=$ligne->ip;
    
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
function get_log($id)
{
  $connect = connexionBdd();
  $requete="SELECT  l.date,l.Message,l.ip,u.nom_user from log_users l inner join users u on u.id = l.id_users where id_users = $id ORDER by l.date DESC;";

  $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
  $i = 0;
  // echo $requete;
  $ligne = $jeuResultat->fetch();
  while($ligne)
  {
  
    $info[$i]['Date']=$ligne->date;
    $info[$i]['Message']=$ligne->Message;
    $info[$i]['Nom']=$ligne->nom_user;
    $info[$i]['ip']=$ligne->ip;
    
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
function add_log($message,$id)
{
  $ip   = $_SERVER['REMOTE_ADDR'];
  date_default_timezone_set('Europe/Paris');
  $date = date('d-m-y h:i:s');
  $connect = connexionBdd();
  $requete="INSERT INTO log_users (date,Message,id_users,ip) VALUES ('".$date."','".$message."',$id,'".$ip."');";
  $ok=$connect->query($requete);
  echo $requete;
  

}
function verif_temp_status($nom)
{
  $connect = connexionBdd();
  $requete = "select * from users_temp where  statut = 'Refusé' and nom = '".$nom."' ;";
  $jeuResultat=$connect->query($requete); 
  $ligne = $jeuResultat->fetch();
  if($ligne)
  {

     $a = 1;
  }
  else
  {
    $a = 0;
  }
  $jeuResultat->closeCursor();
return $a;
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
function add_users_temp($nom,$mail,$mdp)
{
  

  $date=date("d/m/Y");  

  $connect = connexionBdd();
  $requete = "INSERT INTO users_temp (nom,mail,mdp,statut,date) VALUES ('".$nom."','".$mail."','".$mdp."','En cours','".$date."');";
  $ok=$connect->query($requete);

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
function comptefile()//liste tout les fichier reserver pour l'admin
{
$connect=connexionBdd();  
  if (TRUE) 
  {  
      $requete="select * from Files_Uploads;";      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $b=0;
      
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         $b=$b+1;
         $ligne=$jeuResultat->fetch();
          $i = $i + 1;    
          
      }
     
     
 

      $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
      // deconnecterServeurBD($idConnexion);
      return $b;
      
    }
   
}
function compteuser()//compte le nombre d'utilisateur pour interface admin
{
$connect=connexionBdd();  
  if (TRUE) 
  {  
      $requete="select * from users;";      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $b=0;
      
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         $b=$b+1;
         $ligne=$jeuResultat->fetch();
          $i = $i + 1;    
          
      }
     
     
 

      $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
      // deconnecterServeurBD($idConnexion);
      return $b;
      
    }
   
}
function comptedemande()//compte le nombre d'utilisateur pour interface admin
{
$connect=connexionBdd();  
  if (TRUE) 
  {  
      $requete="select * from users_temp where statut = 'En cours';";      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $b=0;
     
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         $b=$b+1;
         $ligne=$jeuResultat->fetch();
          $i = $i + 1;    
          
      }
     
     
 

      $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
      // deconnecterServeurBD($idConnexion);
      return $b;
      
    }
   
}

function listefile_user($id)//liste les fichier du users Connecter
{
$connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select f.*,u.nom_user from Files_Uploads f inner join users u on f.id_users = u.id  where id_users = $id ;";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      // echo $requete;
  
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         
          $info[$i]['ID']=$ligne->id;
          $info[$i]['Nom']=$ligne->nom;
          $info[$i]['Path']=$ligne->unique_name;
          $info[$i]['Date']=$ligne->date;
          $info[$i]['a']=$ligne->nom_user;
        
          
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
function compte_file($id)//recupere les infos d'un fichier
{
$connect=connexionBdd();  
  if (TRUE) 
  {
      
    
      $requete="select * from Files_Uploads where id_users = $id ;";
      
      
      $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
      $a=0;
  
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         
          $a=$a+1;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
      // deconnecterServeurBD($idConnexion);
      return $a;
      
    }
   
}
function lister_users()
{
  $connect = connexionBdd();
  $requete = "SELECT * from users ;";
  $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

      $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
      $i = 0;
  
      $ligne = $jeuResultat->fetch();
      while($ligne)
      {
         
          $info[$i]['ID']=$ligne->id;
          $info[$i]['Nom']=$ligne->nom_user;
          $info[$i]['Prenom']=$ligne->prenom;
          $info[$i]['Mail']=$ligne->mail;
          
          $ligne=$jeuResultat->fetch();
          $i = $i + 1;
          
      }
      $jeuResultat->closeCursor();   // fermer le jeu de r�sultat
      // deconnecterServeurBD($idConnexion);
      return $info;


}
function identifier($nom, $mdp)//permet de connecter un utilisteurs
{
  $connexion = connexionBdd();
    $requete="select * from users where nom_user ='".addslashes($nom)."' and mdp ='".addslashes($mdp)."' ;";
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
function edit_compte_admin($maxfile,$mdp,$id)
{
  $connect = connexionBdd();
  $requete = "UPDATE users SET maxfile = $maxfile,mdp = '".$mdp."' where id=$id;";
  $ok=$connect->query($requete);
  return $ok;
  echo $requete; 
}
function edit_compte_user($mdp,$id)
{
  $connect = connexionBdd();
  $requete = "UPDATE users SET mdp = '".$mdp."' where id=$id;";
  $ok=$connect->query($requete);
  return $ok;
  echo $requete; 
}
function getuser_by_id($id)
{

  $connect = connexionBdd();
  $requete = "select * from users where id = $id;";
  $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

  $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
  $i = 0;
  $ligne = $jeuResultat->fetch();
  while($ligne)
  {
      // echo($requete);
      $info[$i]['ID']=$ligne->id;
      $info[$i]['Nom']=$ligne->nom_user;  
      $info[$i]['Prenom']=$ligne->prenom;
      $info[$i]['Mail']=$ligne->mail;
      $info[$i]['Categorie']=$ligne->cat;
      $info[$i]['Mdp']=$ligne->mdp;
      $info[$i]['Maxfiles']=$ligne->maxfile;

    
      $ligne=$jeuResultat->fetch();
      $i = $i + 1;
  }

$jeuResultat->closeCursor();   // fermer le jeu de r�sultat
// deconnecterServeurBD($idConnexion);
return $info;

}
function getusers($nom,$mdp)//recupere tout les informations d'un users tel que son id et sa categorie
{
    $connect = connexionBdd();
    $requete = "select * from users where nom_user = '".$nom."' and mdp = '".$mdp."';";
    $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

    $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        // echo($requete);
        $info[$i]['ID']=$ligne->id;
        $info[$i]['Nom']=$ligne->nom_user;  
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
  $requete="select * from users where nom_user = '".$login."';";
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
function compte_visite($id,$page)
{
  $ip   = $_SERVER['REMOTE_ADDR'];
  $date=date("d/m/Y");  
  $connect = connexionBdd();
  $requete="INSERT INTO statistique (ip,compte,date,id_users,pages_id) VALUES ('".$ip."',1,'".$date."',$id,$page)";
  $ok=$connect->query($requete);
 

}
function update_compte($id,$page)
{
  $ip   = $_SERVER['REMOTE_ADDR'];
  $date=date("d/m/Y");  
  $connect = connexionBdd();
  $requete="UPDATE statistique SET ip = '".$ip."',compte=compte+1 where id_users = $id and pages_id = $page;";
  $ok=$connect->query($requete);


}
function compte_visite_page($id,$page)
{
  if(connecter() )
{
  
   if(verif_stat_id($id,$page)==1)
   {
      update_compte($id,$page);
   }
   else
   {
      compte_visite($id,$page);
   }
  }
}
function view_stat($id)
{
  $connect = connexionBdd();
  $requete = "select s.*,p.nom_page from statistique s inner join pages_id p on p.id = pages_id where s.id_users = $id;";
  $jeuResultat=$connect->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

  $jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le resultat soit recuperable sous forme d'objet     
  $i = 0;
  $ligne = $jeuResultat->fetch();
  while($ligne)
  {
      // echo($requete);
      $info[$i]['Nom']=$ligne->nom_page;
      $info[$i]['Compte']=$ligne->compte;  
    
    
      $ligne=$jeuResultat->fetch();
      $i = $i + 1;
  }

$jeuResultat->closeCursor();   // fermer le jeu de r�sultat
// deconnecterServeurBD($idConnexion);
return $info;

}


function verif_stat_id($id,$page)
{
  $connect = connexionBdd();
  $requete="select * from statistique where id_users = $id and pages_id = $page;";
  $jeuResultat=$connect->query($requete); 
  $ligne = $jeuResultat->fetch();
  // echo $requete;
  if($ligne)
  {

     $a = 1;
  }
  else
  {
    $a = 0;
  }
  $jeuResultat->closeCursor();
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
       $date = date("d/m/Y");  
       $requete = "insert into users (`nom_user`,`mail`,`mdp`,`cat`,`date_user`) VALUES ('".$login."','".$mail."','".$mdp."','user','".$date."');";
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