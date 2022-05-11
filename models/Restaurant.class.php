<?php


class Restaurant extends ModeleDeDonnees{
    private $RESTAURANTS = 'SELECT * FROM restaurants';
    private $RESTAURANT = 'SELECT * FROM restaurants WHERE idRestaurant = ';

    public function __construct(){
        parent::__construct();
    }

    public function getRestaurants(){
        return parent::executerRequete($this->RESTAURANTS,'');
    }
    public function getRestaurant($id){
        return parent::executerRequete($this->RESTAURANT,$id);
    }
    
}





