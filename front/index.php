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
                else {
                    include_once('index.php');
                }
        }
        else {
            include_once('index.php');
        }
        require_once('view/footer.php');
    ?>
</body>