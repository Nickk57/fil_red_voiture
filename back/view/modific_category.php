<?php ob_start() ?>
<br>
<div class="container">
    <h2>Modification des categorie</h2>
</div><br>
<div class="container">
    <form method="post">
        <div class="form">
            <label for="exampleInputNom1" class="form-label">Nom</label>
            <input type="text" value="<?=$selCategory['name']?>" name="name" class="form-control" id="exampleInputNom1" aria-describedby="Nom">
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success" type="submit" name="submit">Valides</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php')?>