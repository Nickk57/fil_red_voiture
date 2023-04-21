<?php

    function getProduct($id) {

        $query = "SELECT * FROM product WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $Product = $req->fetchAll();
        return $Product;
    }

    function getIdPicture($id) {
        $query = "SELECT path FROM picture WHERE id_product = :id_product";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id_product', $id, PDO::PARAM_INT);
        $req->execute();
        $path = $req->fetchAll();
        // var_dump($path);
        return $path;
    }
