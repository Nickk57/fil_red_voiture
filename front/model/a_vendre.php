<?php

    function getProducts() {
        $query = "SELECT p.name, p.id_subcategory, sc.name as subCat_name
        FROM product as p
        INNER JOIN sub_category as sc
        ON p.id_subcategory = sc.id
        WHERE name";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $products = $req->fetchAll();
        return $products;
    }



    // function getPicturesByIdProduct($idProduct) {
        // $query = "SELECT path FROM picture WHERE id_product = :id_product";
        // $req = dbConnect()->prepare($query);
        // $req->bindValue(':id_product', $idProduct, PDO::PARAM_INT);
        // $req->execute();
        // $pictures = $req->fetch();
        // return $pictures;
    // }
    
    function selectProducts() {

        $query = "SELECT id, name, builder FROM product";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $products = $req->fetchAll();
        return $products;
    }

    function selectPicture() {

        $query = "SELECT p.id as product_id, p.name as product_name, p.builder as product_builder, 
        pic.path as picture_path, pic.id_product as picture_idProduct
        FROM picture as pic
        INNER JOIN product as p
        ON p.id = pic.id_product
        GROUP BY pic.id_product";
        
        $req = dbConnect()->prepare($query);
        $req->execute();
        $pictures = $req->fetchAll();
        return $pictures;
    }

    // $query = "SELECT path FROM picture GROUP BY id_product";