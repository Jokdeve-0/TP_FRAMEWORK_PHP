<?php
require_once './Models/Restaurant.class.php';
require_once './Models/Avis.class.php';
require_once './models/Vue.class.php';

function accueil() {
    $rest = new Restaurant();
    $restaurants = $rest->getRestaurants();
    $vue = new Vue('accueil');
    $vue->afficher(['restaurants' => $restaurants]);
}

function restaurant() {
    $idRestaurant = filter_input(INPUT_GET, 'idRestaurant', FILTER_SANITIZE_NUMBER_INT);
    if (!$idRestaurant) {
        throw new Exception('L\'identifiant du restaurant doit être un nombre');
    }
    $rest = new Restaurant();
    $restaurant = $rest->getRestaurant($idRestaurant)[0];
    $av = new Avis();
    $avis = $av->getAvis($idRestaurant);
    $vue = new Vue('restaurant');
    $vue->afficher(['restaurant' => $restaurant, 'avis' => $avis]);
}