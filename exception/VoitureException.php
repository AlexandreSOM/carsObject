<?php

class VoitureException extends Exception {
    private $allowedMark = ["Audi", "Renault" , "Toyota"];

    public function __construct($voiture){
        if(!in_array($voiture->getMarque(), $this->allowedMark)){
            throw new Exception("La voiture n'est pas disponible", 400);
        }
    }
}

?>
