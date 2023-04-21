<?php

    function ajoutSubCategory() {
        $name = htmlspecialchars($_POST['name']);

        $query = "INSERT INTO sub_category (name) VALUES (:name)";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        
        if ($req->execute() > 0) {
            $success = 'la sous-categorie à était ajouter.';
            return $success;
        }
    }