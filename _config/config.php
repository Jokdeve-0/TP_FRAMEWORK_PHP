<?php 
 //!\\ A enlever lors du déploiement 
 error_reporting(E_ERROR | E_PARSE); 
 ini_set('display_errors', true); 

 ini_set('session.cookie_lifetime', false); 
 session_start(); 
 
 // Paths 
 define('PATH_REQUIRE', substr($_SERVER['SCRIPT_FILENAME'], 0, -9)); // Pour fonctions d'inclusion php 
 define('PATH', substr($_SERVER['PHP_SELF'], 0, -9)); // Pour images, fichiers etc (html) 

 define('WEBSITE_DESCRIPTION','TP CDA PHP Construire un framework'); 
 define('DATABASE_HOST','localhost'); 
 define('DATABASE_NAME','tp_eni'); 
 define('DATABASE_USER','root'); 
 define('DATABASE_PASSWORD','');
?>