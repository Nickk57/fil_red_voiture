<?php ob_start() ?>
<div class="container-fluid text-light">
    <div class="col">
        <div class="col-2"></div>
        <div class="row">
                <?php foreach($pictures as $pict){?>
                    <a class="col" href="index.php?page=7&id=<?=$pict['product_id']?>">
                        <div class="col text-center mt-3">
                            <img src="../back/<?= $pict['picture_path']?>" class="img2">
                            <h2 class="fs-5"><?=$pict['product_builder'] ?>  <?=$pict['product_name']?></h2>
                        </div>
                    </a>
                <?php } ?>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-auto text-center">
        
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row text-center">
        <!-- <div class="col"> -->
            <!-- <button type="submit" role="button" class="btn btn-outline-primary">En voir plus</button> -->
        <!-- </div> -->
    </div><br>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>