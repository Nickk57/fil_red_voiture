<?php

function dbConnect() {
    $id = 'root';
    $mdp = '';
    
    try {
        $database = new PDO('mysql:host=localhost;dbname=filred_voiture;charset=utf8',$id,$mdp);
        return $database;
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}