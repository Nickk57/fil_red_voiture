<?php ob_start() ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col text-center">
            <button class="black">
                <a href="index.php?page=6">
                    <div class="">
                        <img src="image/208391_5107bca7d155441cac0e835d49bb64c5_mv2_d_4032_3024_s_4_2.webp">
                    </div>
                    <div class="text-danger">
                        <h5 class="">VISITE DE NOTRE ATELIER</h5>
                    </div>
                </a>
            </button>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php')?>