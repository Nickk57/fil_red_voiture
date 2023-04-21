<?php

    function selectCategory($id) {

        $query = 'SELECT * FROM category WHERE id = :id';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $selCategory = $req->fetch(PDO::FETCH_ASSOC);
        return $selCategory;
    }

    function modificCateg($id) {
        $name = htmlspecialchars($_POST['name']);

        $query = 'UPDATE category SET name = :name WHERE id = :id';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->execute();
    }