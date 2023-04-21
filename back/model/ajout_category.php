<?php
    function ajoutCategory() {
        $nom = htmlspecialchars($_POST['name']);

        $query = "INSERT INTO category (name) VALUES (:name)";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $nom, PDO::PARAM_STR);
        
        if($req->execute() > 0) {
            $success = 'une categorie est ajouter';
            return $success;
        }
    }