<?php

class Gioco extends Prodotto {

    private $materiale;
    private $dimensioni;
    
    public function __construct($immagine, $titolo, $prezzo, $categoria, $materiale, $dimensioni) {

        parent::__construct($immagine, $titolo, $prezzo, $categoria);

        $this -> setMateriale($materiale);
        $this -> setDimensioni($dimensioni);
    }

    public function getMateriale() {
        return $this -> materiale;
    }

    public function setMateriale($materiale) {
        $this -> materiale = $materiale;
    }

    public function getDimensioni() {
        return $this -> dimensioni;
    }

    public function setDimensioni($dimensioni) {
        $this -> dimensioni = $dimensioni;
    }

}

