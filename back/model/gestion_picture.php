<?php

function gestionPicture() {
    $picture = dbconnect();

    $query = "SELECT * FROM picture";
    $req = $picture->prepare($query);
    $req->execute();
    $gest_picture = $req->fetchAll();
    return $gest_picture;
}