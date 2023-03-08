<body>
    <?php
        require_once('templates/bar_nav.php');
        // require_once('model/model.php');
        require_once('templates/layout.php');
    ?>
    <?php
        if (isset($_GET['page']) && $_GET['page'] !=NULL) {
            	$page = strval($_GET['page']);

                if($page == 1) {
                    include_once('templates/contact.php');
                }
                elseif($page == 2) {
                    include_once('templates/vos_avis.php');
                }
                elseif($page == 3) {
                    include_once('templates/a_vendre.php');
                }
                elseif($page == 4) {
                    include_once('templates/vendu.php');
                }
                elseif($page == 5) {
                    include_once('templates/atelier.php');
                }
                elseif($page == 6) {
                    include_once('templates/notre_atelier.php');
                }
                else {
                    include_once('index.php');
                }
        }
        else {
            include_once('index.php');
        }
    ?>
    <?php
        require_once('templates/footer.php');
    ?>
</body>