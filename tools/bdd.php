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
 
 
?> 