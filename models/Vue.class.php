<?php
class Vue{
    private $action;
    private $titre;
    public function __construct($action){
        $this->action = $action;
    }

    private function insererDonnees(string $file,$args):string{
        if(!file_exists($file)){
            throw new Exception('Le fichier n\'existe pas !');
        }
        extract($args);
        ob_start();
        require($file);
        return ob_get_clean();
    }

    public function afficher($args){
        $content = $this->insererDonnees('views/'.$this->action.'_view.php',$args);
        echo $this->insererDonnees('views/gabarit.php',['titre'=>$this->titre,"contenu"=>$content]);
    }

}