<?php ob_start() ?>
<div class="container"><br>
    <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
        <button role="button" class="btn btn-success" name=""><a href="index.php?page=10" class="text-light">Ajout une categorie</a></button>
    </div>
    <h2>Gestion des categorie :</h2>
    <table class="table table-bordered">
        <head>
            <tr>
                <th>nom</th>
                <th class="text-center">Modifie</th>
                <th class="text-center">Supprimer</th>
            </tr>
        </head>
        <div class="container">
            <tbody>
                <?php foreach($gest_category as $categ) {?>
                <tr>
                    <td>
                        <?= $categ['name'] ?>
                    </td>
                    <td class="text-center">
                        <a href="index.php?page=17&id=<?=$categ['id']?>">
                            <i class="fa fa-gaer fa-2x" title="Modifier" style="color: orange;">
                                <img src="image/roue de param.png" class="img1">
                            </i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="index.php?page=12&id=<?=$categ['id']?>" onclick="return(confirm('Voulez-vous supprimer cette category ?'))">
                            <i class="fa fa-close fa-2x" title="Supprime" style="color: red;">
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
<?php $content = ob_get_clean()?>
<?php include('layout.php') ?>