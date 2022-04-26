<?php
include('fonction.php');
session_start();


if(estAdministrateurConnecte() )
{
    $view = listefile();
    include('nav-main.php');
    include('v2liste.php');
}
else
{
    include('nav-main.php');
    echo $_SESSION["loginUser"];
    echo "NON AUTHORISER";
    echo $_SESSION["catUser"];
}

?>