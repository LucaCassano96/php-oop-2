<?php

class Product {

    private $immagine;
    private $titolo;
    private $prezzo;
    private $iconaCategoria;
    private $tipoDiArticolo;


    public function __construct($immagine,$titolo,$prezzo,$iconaCategoria,$tipoDiArticolo) {

        $this -> setImmagine($immagine);
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);
        $this -> setIconaCategoria($iconaCategoria);
        $this -> setTipoDiArticolo($tipoDiArticolo);

    }

    public function getImmagine() {
        return $this -> immagine;
    }

    public function setImmagine($immagine) {
        $this -> immagine = $immagine;
    }

    public function getTitolo() {
        return $this -> titolo;
    }
    public function setTitolo($titolo) {
        $this -> titolo = $titolo;
    }

    public function getPrezzo() {
        return $this -> prezzo;
    }

    public function setPrezzo($prezzo) {
        $this -> prezzo = $prezzo;
    }

    public function getIconaCategoria() {
        return $this -> iconaCategoria;
    }

    public function setIconaCategoria($iconaCategoria) {
        $this -> iconaCategoria = $iconaCategoria;
    }

    public function getTipoDiArticolo() {
        return $this -> tipoDiArticolo;
    }

    public function setTipoDiArticolo($tipoDiArticolo) {
        $this -> tipoDiArticolo = $tipoDiArticolo;
    }
    
}