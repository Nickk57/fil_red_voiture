<?php ob_start() ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col text-center">
            <div class="col">
                <img src="image/voiture/208391_721a5ae9cf9a4fd19d5b318f78aef80c_mv2.webp">
                <h2 class="fs-5 text-light">ASTON MARTIN V8 VANTAGE</h2>
            </div>
            <div class="col">
                <img src="image/voiture/208391_2cfbe0c8453740d2bc7e79d019865c0b_mv2_d_4032_3024_s_4_2.webp">
                <h2 class="fs-5 text-light">FERRARI 328 GTB</h2>
            </div>
            <div class="col">
                <img src="image/voiture/208391_5002fb55aa7a463395645e60d3b3fd6a_mv2_d_4032_3024_s_4_2.webp">
                <h2 class="fs-5 text-light">PORSCHE CAYMAN GTS 340CV</h2>
            </div>
        </div>
        <div class="col text-center">
            <div class="col">
                <img src="image/voiture/208391_c28c3e49bacd441386a5978e2fdae49b_mv2.webp">
                <h2 class="fs-5 text-light">FERRARI 430 F1 HAMANN</h2>
            </div>
            <div class="col">
                <img src="image/voiture/208391_1a08da6fc1214e26bfd178f1e5cd2977_mv2.webp">
                <h2 class="fs-5 text-light">FERRARI 360 MODENA BOITE MANUELLE</h2>
            </div>
            <div class="col">
                <img src="image/voiture/208391_752af456524e43bc9d9c937b5ceff136_mv2_d_4032_3024_s_4_2.webp">
                <h2 class="fs-5 text-light">PORSCHE BOXTER S</h2>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row" hidden id="contenu1">
        <div class="col-2"></div>
        <div class="col text-center">
            <div class="col">
                <img src="image/voiture/">
                <h2 class="fs-5 text-light">PORSCHE</h2>
            </div>
            <div class="col">
                <img src="image/voiture/">
                <h2 class="fs-5 text-light">FERRARI</h2>
            </div>
            <div class="col">
                <img src="image/voiture/">
                <h2 class="fs-5 text-light">LAMBORGHINI</h2>
            </div>
        </div>
        <div class="col">
            <div class="col">
                <img src="image/voiture/">
                <h2 class="fs-5 text-light">BMW</h2>
            </div>
            <div class="col">
                <img src="image/voiture/">
                <h2 class="fs-5 text-light">FERRARI</h2>
            </div>
            <div class="col">
                <img src="image/voiture/">
                <h2 class="fs-5 text-light">PORSCHE</h2>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row text-center">
        <div class="col">
            <button type="submit" role="button" onclick="contenu1()" class="btn btn-outline-primary" data-hook="load-more-button">En voir plus</button>
        </div>
    </div>
</div>
<script>
    function contenu1() {

        document.getElementById("contenu1").style.display = "none";
        document.getElementById('contenu1').style.display = "block";
    }
    
</script>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>