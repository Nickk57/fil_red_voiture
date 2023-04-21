<?php

    function selectSubCategory($id) {

        $query = 'SELECT * FROM sub_category WHERE id = :id';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $selSubCategory = $req->fetch(PDO::FETCH_ASSOC);
        return $selSubCategory;
    }

    function modificSubCategory($id) {
        $name = htmlspecialchars($_POST['name']);

        $query = 'UPDATE sub_category SET name = :name WHERE id = :id';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->execute();
    }