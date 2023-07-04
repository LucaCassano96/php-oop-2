<?php

class Cuccia extends Prodotto {

    private $materiale;
    private $dimensioni;
    private $forma;
    
    public function __construct($immagine, $titolo, $prezzo, $categoria, $materiale, $dimensioni, $forma) {

        parent::__construct($immagine, $titolo, $prezzo, $categoria);

        $this -> setMateriale($materiale);
        $this -> setDimensioni($dimensioni);
        $this -> setForma($forma);
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

    public function getForma() {
        return $this -> forma;
    }

    public function setForma($forma) {
        $this -> forma = $forma;
    }
}

