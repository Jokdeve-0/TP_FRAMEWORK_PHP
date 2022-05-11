<?php 
class Avis extends ModeleDeDonnees{

    private $AVIS = 'SELECT * FROM avis WHERE idRestaurant = ';
    
    public function __construct(){
        parent::__construct();
    }

    public function getAvis($id){
        return parent::executerRequete($this->AVIS,$id);
    }
}