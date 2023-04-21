<?php

    function selectSubCategory() {
        $query = "SELECT * FROM sub_category";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $subCategory = $req->fetchAll();
        return $subCategory;
    }
    
    function selectBrand($id) {
        $query = "SELECT id, name FROM sub_category WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $brand = $req->fetchAll();
        return $brand;
    }

    function selectProduct($id) {
        
        $query = 'SELECT * FROM product WHERE id = :id';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $selProduct = $req->fetch(PDO::FETCH_ASSOC);
        return $selProduct;
    }

    function modificProduct($id) {
        $name = htmlspecialchars($_POST['name']);
        $prix = strval($_POST['price']);
        $cons = htmlspecialchars($_POST['constructeur']);
        $modele = htmlspecialchars($_POST['modele']);
        $version = htmlspecialchars($_POST['version']);
        $annee = htmlspecialchars($_POST['annee']);
        $dateimma = htmlspecialchars($_POST['dateimma']);
        $kilom = htmlspecialchars($_POST['kilometrage']);
        $carub = htmlspecialchars($_POST['carburant']);
        $bdv = htmlspecialchars($_POST['bdv']);
        $colorE = htmlspecialchars($_POST['colorE']);
        $colorI = htmlspecialchars($_POST['colorI']);
        $puisFisc = htmlspecialchars($_POST['puisFisc']);
        $puisDIN = htmlspecialchars($_POST['puisDIN']);
        $emisCO2 = htmlspecialchars($_POST['emissionCO2']);
        $Nporte = htmlspecialchars($_POST['NPorte']);
        $Nplace = htmlspecialchars($_POST['NPlace']);
        $garantie = htmlspecialchars($_POST['garantie']);
        $optionInter = htmlspecialchars($_POST['optionInter']);
        $optionExter = htmlspecialchars($_POST['optionExter']);
        $securite = htmlspecialchars($_POST['securite']);
        $id_categ = strval($_POST['id_subcategory']);

        $query = 'UPDATE product SET id = :id, name = :name, price = :price, builder = :builder, 
        model = :model, version = :version, year = :year, date_registration = :date_registration, 
        mileage = :mileage, fuel = :fuel, gearbox = :gearbox, colorE = :colorE, colorI = :colorI, 
        power_tax = :power_tax, powerDIN = :powerDIN, emisCO2 = :emisCO2, Ndoor = :Ndoor,  
        Nspace = :Nspace, guarantee = :guarantee, optionInter = :optionInter, optionExter = :optionExter,  
        safety = :safety, id_subcategory = :id_subcategory WHERE id = :id ';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':price', $prix);
        $req->bindValue(':builder', $cons, PDO::PARAM_STR);
        $req->bindValue(':model', $modele, PDO::PARAM_STR);
        $req->bindValue(':version', $version, PDO::PARAM_STR);
        $req->bindValue(':year', $annee, PDO::PARAM_STR);
        $req->bindValue(':date_registration', $dateimma, PDO::PARAM_STR);
        $req->bindValue(':mileage', $kilom, PDO::PARAM_STR);
        $req->bindValue(':fuel', $carub, PDO::PARAM_STR);
        $req->bindValue(':gearbox', $bdv, PDO::PARAM_STR);
        $req->bindValue(':colorE', $colorE, PDO::PARAM_STR);
        $req->bindValue(':colorI', $colorI, PDO::PARAM_STR);
        $req->bindValue(':power_tax', $puisFisc, PDO::PARAM_STR);
        $req->bindValue(':powerDIN', $puisDIN, PDO::PARAM_STR);
        $req->bindValue(':emisCO2', $emisCO2, PDO::PARAM_STR);
        $req->bindValue(':Ndoor', $Nporte, PDO::PARAM_STR);
        $req->bindValue(':Nspace', $Nplace, PDO::PARAM_STR);
        $req->bindValue(':guarantee', $garantie, PDO::PARAM_STR);
        $req->bindValue(':optionInter', $optionInter, PDO::PARAM_STR);
        $req->bindValue(':optionExter', $optionExter, PDO::PARAM_STR);
        $req->bindValue(':safety', $securite, PDO::PARAM_STR);
        $req->bindValue(':id_subcategory', $id_categ, PDO::PARAM_INT);
        $req->execute();

    }