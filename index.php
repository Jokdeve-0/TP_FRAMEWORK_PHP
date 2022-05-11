<?php 
// #####################################method 1
/* imports */
require_once './_config/config.php';
require_once './_config/functions.php';
spl_autoload_register('classAutolaod');


 $page =whichPageToDisplay($_GET['page']);
 /*build page*/
 include_once './_config/includes/head.php';
 include_once './_config/includes/header.php';
 // Array contenant toutes les pages
 $allPages = scandir('controllers/');
 if(in_array($page.'_ctrl.php', $allPages)) {
    // inclusions de la page
    // include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_ctrl.php';
    include_once 'views/'.$page.'_view.php';
}else{
    include_once 'controllers/404_ctrl.php';
    include_once 'views/404_view.php';
}
include_once './_config/includes/foot.php';


// ####################################Method 2 
// require_once './controllers/Controller.php';
// require_once './models/Vue.class.php';
// accueil();
// TODO suite routage