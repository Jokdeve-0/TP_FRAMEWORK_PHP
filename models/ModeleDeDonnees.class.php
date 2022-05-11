<?php 
abstract class ModeleDeDonnees{
    private $cnx;

    public function __construct(){
        $this->cnx = $this->getConnexion();
    }

    protected function executerRequete($sql,$id){
        return $this->cnx->query($sql.$id)->fetchAll();
    }
    
    public function getConnexion(){
        try{
            $pdo = (new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8',DATABASE_USER,DATABASE_PASSWORD));
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException$e){
            $msg='ERREUR PDO dans'.$e->getFile().':'. $e->getLine().':'.$e->getMessage();
            die($msg);
        }
    }
}