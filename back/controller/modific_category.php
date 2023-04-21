<?php

    require_once('model/modific_category.php');

    function select_category() {
        
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $selCategory = selectCategory($id);

            if(isset($_POST['submit'])) {
                modificCateg($id);
                $selCategory = selectCategory($id);
            }
        }
        require('view/modific_category.php');
    }