<?php

    function supCategory() {
        $success = "la categorie est supprimer !";

        if(isset($_GET['id'])) {
            $id = strval($_GET['id']);
            
            $query = "DELETE FROM category WHERE id = :id";
            $req = dbConnect()->prepare($query);
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
            return $success;            
        }
    }