<?php 
class RouterApp{
    public function retrieveIntInURL($int){
        if(isset ($int) and !empty($int)) {
                return filter_var($int,FILTER_VALIDATE_INT);
        }
    }
    public function retrieveTextInURL($string){
        if(isset ($string) and !empty($string)) {
                return filter_var($string,FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }
}