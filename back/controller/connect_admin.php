<?php

require_once('model/connect_admin.php');
$success = '';

function connect_admin() {

    if(isset($_POST['submit'])) {
        $success = adminConnect();
    }
    require('view/connect_admin.php');
}