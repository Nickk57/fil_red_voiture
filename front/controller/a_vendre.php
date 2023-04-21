<?php
    require_once('model/a_vendre.php');
    
    function selectProduct() {

        $pictures = selectPicture();

        require('view/a_vendre.php');
    }
    