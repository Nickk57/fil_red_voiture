<?php

function supProduct() {
    $success = "Le produits est supprimer !";

    if(isset($_POST['id'])) {
        $id = strval($_GET['id']);

        $query = "DELETE FROM product WHERE id = :id";
        $req = dbConnect()->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return $success;
    }
}