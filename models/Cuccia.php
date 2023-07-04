<?php

class Cuccia extends Prodotto {

    private $materiale;
    private $dimensione;
    private $forma;
    
    public function __construct($immagine, $titolo, $prezzo, $categoria, $materiale, $dimensione, $forma) {

        parent::__construct($immagine, $titolo, $prezzo, $categoria);

        $this -> setMateriale($materiale);
        $this -> setDimensione($dimensione);
        $this -> setForma($forma);
    }

    public function getMateriale() {
        return $this -> materiale;
    }

    public function setMateriale($materiale) {
        $this -> materiale = $materiale;
    }

    public function getDimensione() {
        return $this -> dimensione;
    }

    public function setDimensione($dimensione) {
        $this -> dimensione = $dimensione;
    }

    public function getForma() {
        return $this -> forma;
    }

    public function setForma($forma) {
        $this -> forma = $forma;
    }
}

