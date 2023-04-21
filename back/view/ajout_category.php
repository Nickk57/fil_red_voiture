<?php ob_start() ?>
<br><br>
<div class="container">
    <h1>Ajoute une categorie</h1>
    <h3><?=$success?></h3>
</div><br>
<div class="container">
    <form method="post">
        <div class="form">
            <label for="exampleFormControlInput1">Nom de la categorie :</label>
            <input class="form-control" type="text" name="name" 
            id="exampleFormControlInput1" required>
        </div><br>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-success" name="submit">Enregistre la categorie</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>