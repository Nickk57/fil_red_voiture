<?php

function getProducts() {

    $query = "SELECT p.id, p.name, p.price, p.builder, p.model, p.version, p.year, 
    p.date_registration, p.mileage, p.fuel, p.gearbox, p.colorE, p.colorI, 
    p.power_tax, p.powerDIN, p.emisCO2, p.Ndoor, p.Nspace, p.guarantee 
    p.optionInter, p.optionExter, p.safety, p.id_subcategory, sc.name as subCat_name
    FROM product as p
    INNER JOIN sub_category as sc
    ON p.id_subcategory = sc.id";
    $req = dbConnect()->prepare($query);
    $req->execute();
    $products = $req->fetchAll(PDO::FETCH_DEFAULT);
    var_dump($products);
    return $products;

}

function getPicturesByIdProduct($idProduct) {

    $query = "SELECT path FROM picture WHERE id_product = :id_product";
    $req = dbConnect()->prepare($query);
    $req->bindValue(':id_product', $idProduct, PDO::PARAM_INT);
    $req->execute();
    $pictures = $req->fetchAll();
    return $pictures;
}

function selectProducts() {

    $query = "SELECT * FROM product";
    $req = dbConnect()->prepare($query);
    $req->execute();
    $products = $req->fetchAll();
    return $products;
}