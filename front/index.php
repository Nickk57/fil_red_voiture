<body>
    <?php
        require_once('include/bar_nav.php');
        // require_once('model/model.php');
        require_once('templates/layout.php');
    ?>
    <?php
        if (isset($_GET['page']) && $_GET['page'] !=NULL) {
            	$page = strval($_GET['page']);

                if($page == 1) {
                    include_once('include/contact.php');
                }
                elseif($page == 2) {
                    include_once('include/vos_avis.php');
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
        require_once('include/footer.php');
    ?>
</body>