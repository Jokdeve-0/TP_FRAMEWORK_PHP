<?php
 require_once './models/RouterApp.class.php';
$routerApp = new RouterApp();
if($routerApp->retrieveIntInURL($_GET['idRestaurant'])){
    $restaurant = ( new Restaurant())->getRestaurant($_GET['idRestaurant'])[0];
    $avis = ( new Avis())->getAvis($_GET['idRestaurant']);
}else
    header("Location: /?page=404&error=Aucun restaurant n'a été trouvé.");