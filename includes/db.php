<?php
try{
    
    $db= new PDO('mysql:host='.SERVER_NAME.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $db->exec('SET NAMES utf8');
    
}
catch(PDOException $e){
    die($e->getMessage());
    
}