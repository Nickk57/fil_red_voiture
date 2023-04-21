<?php
    require_once('model/product.php');

    function get_products() {

        if(isset($_GET['id'])) {
            $id = $_GET['id'];

            $Product = getProduct($id);
            $path = getIdPicture($id);
        }

        require('view/product.php');
    }