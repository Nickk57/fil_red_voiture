<?php ob_start() ?>
<br><br>
<div class="container">
    <h1 class="text-center">Ajoute un product</h1>
    <h3><?=$success?></h3>
</div><br>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form">
            <label for="exampleFormControlInput1">Nom :</label>
            <input type="text" name="name" id="exampleFormControlInput1" class="form-control">
        </div><br>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">€</span>
            <input class="form-control" name="price" type="number" placeholder="Prix" aria-label="Prix" aria-describedby="basic-addon1">
        </div><br>
        <div class="form">
            <label for="exampleFormControlInput1" class="form-label">Constructeur</label>
            <input type="text" name="constructeur" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Modèle</label>
            <input type="text" name="modele" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Version</label>
            <input type="text" name="version" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Année du modèle</label>
            <input type="text" name="annee" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Date 1ère immatriculation</label>
            <input type="text" name="dateimma" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Kilométrage</label>
            <input type="text" name="kilometrage" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Carburant</label>
            <input type="text" name="carburant" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Boîte de vitesse</label>
            <input type="text" name="bdv" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Couleur extérieure</label>
            <input type="text" name="colorE" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Couleur intérieure</label>
            <input type="text" name="colorI" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Puissance fiscale</label>
            <input type="text" name="puisFisc" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Puissance DIN</label>
            <input type="text" name="puisDIN" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Emission de CO2</label>
            <input type="text" name="emissionCO2" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Nombre de portes</label>
            <input type="text" name="NPorte" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Nombre de places</label>
            <input type="text" name="NPlace" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Garantie</label>
            <input type="text" name="garantie" id="exampleFormControlInput1" class="form-control">
        </div><br>
        <div class="form">
            <label for="exampleFormControlInput1">Options intérieures</label>
            <textarea type="text" name="optionInter" id="exampleFormControlInput1" class="form-control"></textarea>
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Options extérieures</label>
            <textarea type="text" name="optionExter" id="exampleFormControlInput1" class="form-control"></textarea>
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Sécurité</label>
            <textarea type="text" name="securite" id="exampleFormControlInput1" class="form-control"></textarea>
        </div><br>
        <div class="form">
            <select class="col-3 text1" name="id_subcategory" id="id_subcategory"><?php foreach($subCategory as $subcate){?>
                <option value="<?=$subcate['id']?>"><?= $subcate['name']?></option>
            <?php } ?>
            </select>
        </div><br>
        <div class="form">
            <label for="formFile" class="form-label">Votre photo :</label>
            <input type="file" name="picture" class="form-control" id="formFile">
        </div><br>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="submit" class="btn btn-success">envoie</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>