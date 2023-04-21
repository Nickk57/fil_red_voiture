<?php
require_once('model/gestion_product.php');
$success = '';

function gestion_product() {
    
    $products = selectProducts();
    require('view/gestion_product.php');
}