<?php

class MotoException extends Exception {
    private $allowedMark = ["Kawazaki", "Yamaha", "Honda"];

    public function __construct($moto){
        if(!in_array($moto->getMarque(), $this->allowedMark)){
            throw new Exception("La moto n'est pas disponible", 400);
        }
    }
}

?>
