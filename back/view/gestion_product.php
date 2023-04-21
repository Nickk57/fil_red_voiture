<?php ob_start() ?>
<div class="container">
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success" name=""><a href="index.php?page=4" class="text-light">Ajout d'un produit</a></button>
    </div>
    <h1>Gestion des produit :</h1>
    <table class="table table-bordered">
        <head>
            <tr>
                <!-- <th>Marque</th> -->
                <th>Nom</th>
                <th>Photo</th>
                <th>Prix</th>
                <th>option</th>
                <th>details</th>
                <th class="text-center">Modifie</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($products as $product) {?>
                    <tr>
                        <td class="align-middle">
                            <?= $product['name'] ?>
                        </td>
                        <td class="align-middle col-3">
                            <?php foreach(getPicturesByIdProduct($product['id']) as $pict) {?>
                                <img src="<?= $pict['path'] ?>" class="img2">
                            <?php } ?>
                        </td>
                        <td class="text-center align-middle col-2">
                            <?= $product['price']?>€
                        </td>
                        <td class="text-center align-middle">
                            <ul>
                                <li><?= $product['builder']?></li>
                                <li><?= $product['model']?></li>
                                <li><?= $product['version']?></li>
                                <li><?= $product['year']?></li>
                                <li><?= $product['date_registration']?></li>
                                <li><?= $product['mileage']?></li>
                                <li><?= $product['fuel']?></li>
                                <li><?= $product['gearbox']?></li>
                                <li><?= $product['colorE']?></li>
                                <li><?= $product['colorI']?></li>
                                <li><?= $product['power_tax']?></li>
                                <li><?= $product['powerDIN']?></li>
                                <li><?= $product['emisCO2']?></li>
                                <li><?= $product['Ndoor']?></li>
                                <li><?= $product['Nspace']?></li>
                                <li><?= $product['guarantee']?></li>
                            </ul>
                        </td>
                        <td class="text-center align-middle col-3">
                            <ul>
                                <li><?= $product['optionInter']?></li>
                                <li><?= $product['optionExter']?></li>
                                <li><?= $product['safety']?></li>
                            </ul>
                        </td>
                        <td class="text-center align-middle">
                            <a href="index.php?page=19&id=<?=$product['id']?>&id_subcategory=<?=$product['id_subcategory']?>">
                                <i class="fa fa-gaer fa-2x" title="Modifier" style="color: orange;">
                                    <img src="image/roue de param.png" class="img1">
                                </i>
                            </a>
                        </td>
                        <td class="text-center align-middle">
                            <a href="index.pho?page=6&id=<?=$product['id']?>" onclick="return(confirm('Voulez-vous supprimer cette category ?'))">
                                <i class="fa fa-close fa-2x" title="Supprimer" style="color: red;">
                                    <img src="image/Red_x.svg.png" class="img1">
                                </i>
                            </a>
                        </td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </div>
    </table>
</div>
<?php $content = ob_get_clean() ?>
<?php include('layout.php') ?>