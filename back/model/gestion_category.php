<?php

    function gestionCategory() {

        $query = 'SELECT * FROM category';
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_category = $req->fetchAll();
        return $gest_category;
    }
