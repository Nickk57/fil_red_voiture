<?php ob_start() ?>
<br>
<div class="container">
    <h1>Modification des produits</h1>
</div><br>
<div class="container">
    <form method="post">
        <div class="form">
            <label for="exampleInputNom1" class="form-label">Nom</label>
            <input type="text" value="<?=$selProduct['name']?>" name="name"
            class="form-control" id="exampleInputNom1" aria-describedby="Nom">
        </div><br>
        <div class="form">
            <label for="exampleInputNom1" class="form-label">Prix</label>
            <input type="number" value="<?=$selProduct['price']?>" name="price"
            class="form-control" id="exampleInputNom1" aria-describedby="Nom">
        </div><br>
        <div class="form">
            <label for="exampleFormControlInput1">Constructeur</label>
            <input type="text" value="<?=$selProduct['builder']?>" name="constructeur" 
            id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Modèle</label>
            <input type="text" value="<?=$selProduct['model']?>" name="modele" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Version</label>
            <input type="text" value="<?=$selProduct['version']?>" name="version" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Année du modèle</label>
            <input type="text" value="<?=$selProduct['year']?>" name="annee" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Date 1ère immatriculation</label>
            <input type="text" value="<?=$selProduct['date_registration']?>" name="dateimma" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Kilométrage</label>
            <input type="text" value="<?=$selProduct['mileage']?>" name="kilometrage" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Carburant</label>
            <input type="text" value="<?=$selProduct['fuel']?>" name="carburant" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Boîte de vitesse</label>
            <input type="text" value="<?=$selProduct['gearbox']?>" name="bdv" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Couleur extérieure</label>
            <input type="text" value="<?=$selProduct['colorE']?>" name="colorE" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Couleur intérieure</label>
            <input type="text" value="<?=$selProduct['colorI']?>" name="colorI" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Puissance fiscale</label>
            <input type="text" value="<?=$selProduct['power_tax']?>" name="puisFisc" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Puissance DIN</label>
            <input type="text" value="<?=$selProduct['powerDIN']?>" name="puisDIN" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Emission de CO2</label>
            <input type="text" value="<?=$selProduct['emisCO2']?>" name="emissionCO2" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Nombre de portes</label>
            <input type="text" value="<?=$selProduct['Ndoor']?>" name="NPorte" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Nombre de places</label>
            <input type="text" value="<?=$selProduct['Nspace']?>" name="NPlace" id="exampleFormControlInput1" class="form-control">
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Garantie</label>
            <input type="text" value="<?=$selProduct['guarantee']?>" name="garantie" id="exampleFormControlInput1" class="form-control">
        </div><br>
        <div class="form">
            <label for="exampleFormControlInput1">Options intérieures</label>
            <textarea type="text" name="optionInter" id="exampleFormControlInput1" cols="30" rows="10"
            value="<?=$selProduct['optionInter']?>" class="form-control"><?=$selProduct['optionInter']?></textarea>
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Options extérieures</label>
            <textarea type="text" name="optionExter" id="exampleFormControlInput1" cols="30" rows="10" 
            value="<?=$selProduct['optionExter']?>" class="form-control"><?=$selProduct['optionExter']?></textarea>
        </div>
        <div class="form">
            <label for="exampleFormControlInput1">Sécurité</label>
            <textarea type="text" name="securite" id="exampleFormControlInput1" cols="30" rows="10"
            value="<?=$selProduct['safety']?>" class="form-control"><?=$selProduct['safety']?></textarea>
        </div><br>
        <div class="form">
            <select class="col-3 text1" name="id_subcategory" id="id_subcategory">
                <option value="<?=$brand[0]['id']?>"><?=$brand[0]['name']?></option>
            <?php foreach($subCategory as $subcate){?>
                <option value="<?=$subcate['id']?>"><?=$subcate['name']?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success" type="submit" name="submit">modific</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>