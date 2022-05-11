<?php 
function classAutolaod($class){
    require_once './models/'.$class.'.class.php';
}
function whichPageToDisplay($page){
    if(isset ($page) and !empty($page)) {
        return trim(strtolower($_GET['page']));
    }else{
        return  "accueil";
    }
}
?>