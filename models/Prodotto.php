<?php

class Prodotto {

    private $immagine;
    private $titolo;
    private $prezzo;
    
    private Categoria $categoria;


    public function __construct($immagine, $titolo, $prezzo, Categoria $categoria) {

        $this -> setImmagine($immagine);
        $this -> setTitolo($titolo);
        $this -> setPrezzo($prezzo);
        $this -> setCategoria($categoria);

    }

    public function getImmagine() {
        return $this -> immagine;
    }

    public function setImmagine($immagine) {

        if (strlen($immagine) < 1) {
            throw new Exception("Image can't be empty");
        }

        $this -> immagine = $immagine;
    }

    public function getTitolo() {
        return $this -> titolo;
    }

    public function setTitolo($titolo) {

        if (strlen($titolo) < 1) {
            throw new Exception("Title can't be empty");
        }

        $this -> titolo = $titolo;
    }

    public function getPrezzo() {
        return $this -> prezzo;
    }

    public function setPrezzo($prezzo) {
        $this -> prezzo = $prezzo;
    }

    public function getCategoria() {
        return $this -> categoria;
    }

    public function setCategoria($categoria) {
        $this -> categoria = $categoria;
    }
    
}