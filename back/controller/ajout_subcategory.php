<?php
require_once('model/ajout_subcategory.php');

function ajout_subcategory() {
    $success = '';

    if(isset($_POST['submit'])) {
        $success = ajoutSubCategory();
    }

    require('view/ajout_subcategory.php');
}