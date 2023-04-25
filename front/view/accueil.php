<?php ob_start() ?>
<div class="container text-light mt-1">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/accueil/208391_11acb15c3e3140858ecab137196c0dd4~mv2.webp" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="image/accueil/208391_87e3ac7d5cf644b2822e86b785f32f9c~mv2_d_4032_3024_s_4_2.webp" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="image/accueil/208391_af07bb3988804880a12abdce6699a441~mv2.webp" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="image/accueil/208391_c425135145c04029a290eb17c00ccd69~mv2.webp" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col mt-5">
        <div class="row text-center text-danger">
            <h3>
                Achat, vente, entretien, réparation, carrosserie, restauration et optimisation de véhicules haut de gamme, sportifs et/ou vintage.
            </h3>
        </div>
        <div class="row text-center mt-5">
            <h3>
                St-Maurice s’est spécialisé dans le commerce et la recherche de véhicules d’exception, à l’historique irréprochable et au meilleur prix dans le respect de sa charte de qualité …

                tout cela avec le conseil et le service St Maurice, garantis dans la bonne humeur

                et le respect du client et de ses attentes !   
            </h3>
        </div>
        <div class="row text-center text-danger mt-5 mb-5">
            <h3>
                Passion. Exigence. Sympathie.
            </h3>
        </div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>