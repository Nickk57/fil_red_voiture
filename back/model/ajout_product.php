<?php

    function selectSubCategory() {
        $query = "SELECT * FROM sub_category";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $subCategory = $req->fetchAll();
        return $subCategory;
    }

    function ajoutPicture() {

        if (!isset($_POST['name']) || empty($_POST['name'])
        || !isset($_POST['id_subcategory']) || empty($_POST['id_subcategory'])
        || !isset($_FILES['picture']) || empty($_FILES['picture'])) {
            $success = "Il faut un nom et une image pour validé !";
            return $success;
        }
        else {    
            
            $name = strip_tags($_POST['name']);
            $prix = strip_tags($_POST['price']);
            $cons = strip_tags($_POST['constructeur']);
            $modele = strip_tags($_POST['modele']);
            $version = strip_tags($_POST['version']);
            $annee = strip_tags($_POST['annee']);
            $dateimma = strip_tags($_POST['dateimma']);
            $kilom = strip_tags($_POST['kilometrage']);
            $carub = strip_tags($_POST['carburant']);
            $bdv = strip_tags($_POST['bdv']);
            $colorE = strip_tags($_POST['colorE']);
            $colorI = strip_tags($_POST['colorI']);
            $puisFisc = strip_tags($_POST['puisFisc']);
            $puisDIN = strip_tags($_POST['puisDIN']);
            $emisCO2 = strip_tags($_POST['emissionCO2']);
            $Nporte = strip_tags($_POST['NPorte']);
            $Nplace = strip_tags($_POST['NPlace']);
            $garantie = strip_tags($_POST['garantie']);
            $optionInter = strip_tags($_POST['optionInter']);
            $optionExter = strip_tags($_POST['optionExter']);
            $securite = strip_tags($_POST['securite']);
            $subcateg = strip_tags($_POST['id_subcategory']);

            if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
                if ($_FILES['picture']['size'] <= 1000000) {
                    $fileInfo = pathinfo($_FILES['picture']['name']);
                    $extention = $fileInfo['extension'];
                    $allowedExtention = ['jpg', 'jpeg', 'gif', 'png', 'webp', 'svg'];

                    if (in_array($extention, $allowedExtention)) {
                        move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/'. basename($_FILES['picture']['name']));
                        $photo = 'uploads/'. basename($_FILES['picture']['name']);
                        echo "L'envoi a bien été effectué !";
                        $pictureCh = strip_tags('uploads/'. $_FILES['picture']['name']);
                        ajoutProduct($name, $prix, $cons, $modele, $version, $annee, $dateimma, $kilom, 
                        $carub, $bdv, $colorE, $colorI, $puisFisc, $puisDIN, $emisCO2, $Nporte, $Nplace, 
                        $garantie, $optionInter, $optionExter, $securite, $subcateg, $pictureCh);
                    }
                    else {
                        echo "Le format de fichier n'est pas autorisée. Merci de n'envoyer que des fichers en (.jpg, .jpeg, .png, .gif)";
                        exit;
                    }
                }
                else {
                    echo "Le fichier dépasse la taille autorisée !";
                    exit;
                }
            }
            else {
                echo "Le fichier n'a pas été envoyé correctement !";
                exit;
            }
        }
    }

    
    function ajoutProduct($name, $prix, $cons, $modele, $version, $annee, $dateimma, $kilom, 
    $carub, $bdv, $colorE, $colorI, $puisFisc, $puisDIN, $emisCO2, $Nporte, $Nplace, 
    $garantie, $optionInter, $optionExter, $securite, $subcateg, $pictureCh) {

        $query = "INSERT INTO product (name, price, builder, model, version,  year, date_registration,
        mileage, fuel, gearbox, colorE, colorI, power_tax, powerDIN, emisCO2, Ndoor, Nspace, guarantee, 
        optionInter, optionExter, safety, id_subcategory) 
        VALUES(:name, :price, :builder, :model, :version,  :year, :date_registration,
        :mileage, :fuel, :gearbox, :colorE, :colorI, :power_tax, :powerDIN, :emisCO2, :Ndoor, :Nspace, 
        :guarantee, :optionInter, :optionExter, :safety, :id_subcategory)";
        
        $req = dbConnect()->prepare($query);
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
        $req->bindValue(':id_subcategory', $subcateg, PDO::PARAM_INT);
        $req->execute();

        $query = "SELECT id FROM product ORDER BY id DESC LIMIT 1";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->execute();
        $productID = $req->fetch();
        ajoutPictureBDD($name, $productID[0], $pictureCh);

    }

    function ajoutPictureBDD($name, $productID, $pictureCh) {

        $query = 'INSERT INTO picture (name, path, id_product) 
        VALUES (:name, :path, :id_product)';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':path', $pictureCh, PDO::PARAM_STR);
        $req->bindValue(':id_product', $productID, PDO::PARAM_INT);
        $reponse = $req->execute();
    
        if($reponse > 0) {
            $success = 'envoie de photo est ajouter';
            return $success;
        }
    }
