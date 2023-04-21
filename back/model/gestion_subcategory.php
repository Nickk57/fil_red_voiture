<?php 

    function gestionSubCategory() {

        $query = "SELECT * FROM sub_category";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $gest_subcategory = $req->fetchAll();
        return $gest_subcategory;
    }