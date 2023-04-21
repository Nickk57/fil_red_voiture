<?php

    function selectProduct() {
        $query = "SELECT * FROM product";
        $req = dbConnect()->prepare($query);
        $req->execute();
        $selProduct = $req->fetchAll();
        return $selProduct;
    }

    function ajoutPicture() {
        if (!isset($_POST['name']) || empty($_POST['name'])
        || !isset($_FILES['picture']) || empty($_FILES['picture'])) {
            $success = "Il faut un nom et une image pour validé !";
        }
        else {        
            $name = strip_tags($_POST['name']);
            $idProduct = strip_tags($_POST['id_product']);

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
                        ajoutPictureBDD($name, $pictureCh, $idProduct);
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


    function ajoutPictureBDD($name, $pictureCh, $idProduct) {
        $query = 'INSERT INTO picture (name, path, id_product) 
        VALUES (:name, :path, :id_product)';
        $req = dbConnect()->prepare($query);
        $req->bindValue(':name', $name, PDO::PARAM_STR);
        $req->bindValue(':path', $pictureCh, PDO::PARAM_STR);
        $req->bindValue(':id_product', $idProduct, PDO::PARAM_INT);
        $req->execute();
        $req->fetch();
        // editPicture($productID['id']);

    }

    // function editPicture($productID) {
        
    //     $idPicture = 'UPDATE picture SET id_product = :id_product';
    //     $req = dbConnect()->prepare($idPicture);
    //     $req->bindValue(':id_product', $productID, PDO::PARAM_INT);
    //     if($req->execute() > 0) {
    //         $success = "produit ajouter !";
    //         return $success;
    //     }
        
    // }