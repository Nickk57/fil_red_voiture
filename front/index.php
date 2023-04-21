<body>
    <?php
        require_once('view/bar_nav.php');
        require_once('model/model.php');

        if (isset($_GET['page']) && $_GET['page'] !=NULL) {
            	$page = strval($_GET['page']);

                if($page == 1) {
                    include_once('view/contact.php');
                }
                elseif($page == 2) {
                    include_once('view/vos_avis.php');
                }
                elseif($page == 3) {
                    include_once("controller/a_vendre.php");
                    selectProduct();
                }
                elseif($page == 4) {
                    include_once('view/vendu.php');
                }
                elseif($page == 5) {
                    include_once('view/atelier.php');
                }
                elseif($page == 6) {
                    include_once('view/notre_atelier.php');
                }
                elseif($page == 7) {
                    include_once('controller/product.php');
                    get_products();
                }
                elseif($page == 8) {
                    include_once('controller/accueil.php');
                }
                elseif($page == 9) {
                    include_once('controller/equipe.php');
                }
                else {
                    include_once('controller/accueil.php');
                }
        }
        else {
            include_once('controller/accueil.php');
        }
        require_once('view/footer.php');
    ?>
</body>