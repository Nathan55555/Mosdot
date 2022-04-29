<?php
include('../tools/fonction.php');
session_start();
include('nav-main.php');
$view = get_all_log();
include('../vues/vview_log.php');
?>