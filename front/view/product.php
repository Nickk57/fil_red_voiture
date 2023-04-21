<?php ob_start() ?>
<div class="container text-light mt-5">
    <div class="row">
        <div class="col">
            
            <img src="../back/<?=$path[0]['path']?>">
        </div>
        <div class="col">
            <h2>
                <?=$Product[0]['builder']?>
            </h2>
            <h3>
                <?=$Product[0]['name']?>
            </h3>
        <div class="col">
            <ul>
                <li>Constructeur: <?=$Product[0]['builder']?></li>
                <li>Modèle: <?=$Product[0]['model']?></li>
                <li>Version: <?=$Product[0]['version']?></li>
                <li>Prix: <?=$Product[0]['price']?></li>
                <li>Années du modèle: <?=$Product[0]['year']?></li>
                <li>Date 1ère immatriculation: <?=$Product[0]['date_registration']?></li>
                <li>Kilométrage: <?=$Product[0]['fuel']?></li>
                <li>Boîte de vitesse: <?=$Product[0]['gearbox']?></li>
                <li>Couleur extérieures: <?=$Product[0]['colorE']?></li>
                <li>Couleur intérieures: <?=$Product[0]['colorI']?></li>
                <li>Puissance fiscale: <?=$Product[0]['power_tax']?></li>
                <li>Puissance DIN: <?=$Product[0]['powerDIN']?></li>
                <li>Emission de CO2: <?=$Product[0]['emisCO2']?></li>
                <li>Nombre de portes: <?=$Product[0]['Ndoor']?></li>
                <li>Nombre de places: <?=$Product[0]['Nspace']?></li>
                <li>Garantie: <?=$Product[0]['guarantee']?></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="col-8 mt-5">
        <div class="col">
            <h3>Details</h3>
        </div>
        <div class="col">
            <h3>Options intérieures</h3>
            <ul>
                <li><?=$Product[0]['optionInter']?></li>
            </ul>
        </div>
        <div class="col">
            <h3>Options extérieures</h3>
            <ul>
                <li><?=$Product[0]['optionExter']?></li>
            </ul>
        </div>
        <div class="col">
            <h3>Sécurité</h3>
            <ul>
                <li><?=$Product[0]['safety']?></li>
            </ul>
        </div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>