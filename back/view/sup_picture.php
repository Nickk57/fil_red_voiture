<?php ob_start() ?>
<div>
    <h1><?= $msg ?></h1>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>