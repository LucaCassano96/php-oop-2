
<?php

class Cibo extends Prodotto {
    
    private $marca;
    private $peso;
    private $ingredienti;
    
    public function __construct($immagine, $titolo, $prezzo, $categoria, $marca, $peso, $ingredienti) {

        parent::__construct($immagine, $titolo, $prezzo, $categoria);

        $this -> setMarca($marca);
        $this -> setPeso($peso);
        $this -> setIngredienti($ingredienti);
        
    }

    public function getMarca() {
        return $this -> marca;
    }

    public function setMarca($marca) {
        $this -> marca = $marca;
    }

    public function getPeso() {
        return $this -> peso;
    }

    public function setPeso($peso) {
        $this -> peso = $peso;
    }

    public function getIngredienti() {
        return $this -> ingredienti;
    }

    public function setIngredienti($ingredienti) {
        $this -> ingredienti = $ingredienti;
    }
}
