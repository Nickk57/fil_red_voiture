<?php ob_start() ?>
<div class="container-fluid text-center mt-5 mb-5">
    <div class="col-12">
        <div class="row">
            <div class="">
                <h2 class="text-danger">Votre avis nous intéresse !</h2>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4 mt-3">
                    <input type="text" placeholder="Prénom" size="1" class="form-control">
                </div>
                <div class="col-4 mt-3">
                    <input type="text" placeholder="Nom de famille" class="form-control">
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col-4">
                    <input type="email" placeholder="E-mail" class="form-control">
                </div>
                <div class="col">
                    <div class="rating"><!--
                        --><a href="#5" title="Donner 5 étoiles">☆</a><!--
                        --><a href="#4" title="Donner 4 étoiles">☆</a><!--
                        --><a href="#3" title="Donner 3 étoiles">☆</a><!--
                        --><a href="#2" title="Donner 2 étoiles">☆</a><!--
                        --><a href="#1" title="Donner 1 étoiles">☆</a>
                    </div>
                </div>
                <div class="col-1">
                    <p class="text-danger">Donnez-nous<br> une note</p>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col">
                    <textarea placeholder="Ajoutez votre avis ici" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-2"></div>
            </div>
            <div class="mt-3"><br>
                <button role="button" class="btn btn-danger">ENVOYEZ-NOUS VOTRE AVIS</button>
            </div>
        </div>
    </div>
</div><br>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>