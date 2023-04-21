<?php

    require_once('model/modific_subcategory.php');

    function select_subcategory() {
        $success = '';

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $selSubCategory = selectSubCategory($id);

            if(isset($_POST['submit'])) {
                modificSubCategory($id);
                $selSubCategory = selectSubCategory($id);
            }
        }
        require('view/modific_subcategory.php');
    }