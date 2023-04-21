<?php

    function supSubCategory() {
        $success = "la sous-category est supprimer !";

        if(isset($_GET['id'])) {
            $id = strval($_GET['id']);

            $query = "DELETE FROM sub_category WHERE id = :id";
            $req = dbConnect()->prepare($query);
            $req->bindValue(':id', $id, PDO::PARAM_INT);
            $req->execute();
            return $success;
        }
    }