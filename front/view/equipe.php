<?php ob_start() ?>
<div class="container text-light mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <h2>Garage Nicolas</h2>
            <p>
            Depuis tout petit, Maurice Cataudella se passionne pour l’automobile. <br>
            Formé par des spécialistes de la préparation automobile, Maurice ouvre son garage généraliste, utilise son (rare) temps libre à des projets de restauration automobile, puis prends la responsabilité d’un atelier dans une marque premium. <br>
            Mais le virus de l’automobile d’exception se réveille et Maurice, bien entouré, se lance dans l’aventure de l’officine de prestige St-Maurice ! <br>
            Aujourd’hui, il y met à votre service le résultat de toutes ses années d’apprentissage, de passion, de travail acharné et d’expertise : Maurice travaille sur Ferrari, Porsche, Lamborghini, Aston Martin, Jaguar, Maserati, BMW, Audi, Mercedes, Mini, Lancia, Peugeot, Alpine, Renault, AC Cobra et Corvette. <br>
            </p>
            </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-5">
            <img src="" alt="photo">
        </div>
        <div class="col">
            <h2>Nicolas</h2>
            <p>
            Luca passe son temps dans les ateliers de mécanique depuis qu’il sait marcher, et observe le travail de son père Maurice. <br>
            Au moment de choisir son orientation, il n’y a eu aucune d’hésitation : l’automobile. <br>
            Luca réussit avec succès un baccalauréat pro  de mécanique auto, et suit une première année de BTS commerce pour mieux approcher la gestion de l’entreprise familiale. Sa formation est complétée par une alternance dans l’atelier St Maurice où il parfait son apprentissage au contact de son père. <br>
            Maintenant, Luca a gagné en autonomie, intégré à temps plein l’atelier et continue son perfectionnement, avec l’exigence continue de son père. <br>
            Une jolie passation de compétences. <br>
            </p>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>