<?php

error_reporting(-1);
ini_set('display_errors', 'On');


//include ('database.php');





function connectdb(){
define('DB_NAME', 'kaamelot');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', '127.0.0.1');
define('DB_TABLE', 'citation_kaamelot');



try {
        global $db;
        //echo 'connect db';
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

}

