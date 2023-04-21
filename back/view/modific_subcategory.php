<?php ob_start() ?>
<br>
<div class="container">
    <h1>Modification des sous-categorie :</h1>
    <h3><?= $success ?></h3>
</div><br>
<div class="container">
    <form method="POST">
        <div class="form">
            <label for="exampleFormControlInput1">Nom :</label>
            <input type="text" value="<?=$selSubCategory['name']?>" name="name" id="exampleFormControlInput1" class="form-control" aria-describedby="Nom" require>
        </div><br>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="submit" class="btn btn-success">Enregistre</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php require('layout.php') ?>