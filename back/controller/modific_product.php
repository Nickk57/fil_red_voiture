<?php

    require_once('model/modific_product.php');

    function modific_product() {

        $subCategory = selectSubCategory();
        
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $id_category = $_GET['id_subcategory'];
            $selProduct = selectProduct($id);
            $brand = selectBrand($id_category);
            // var_dump($brand);

            if(isset($_POST['submit'])) {
                modificProduct($id);
                $selProduct = selectProduct($id);
            }
            
        }
        require('view/modific_product.php');
    }