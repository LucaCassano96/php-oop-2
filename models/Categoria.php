<?php

class Categoria{

    private $nome;
    private $icona;

    public function __construct($nome, $icona) {
    
        $this->nome = $nome;
        $this->icona = $icona;
       
    }

    public function getNome() {
        return $this -> nome;
    }

    public function setNome($nome) {
        $this -> nome = $nome;
    }

    public function getIcona() {
        return $this -> icona;
    }

    public function setIcona($icona) {
        $this -> icona = $icona;
    }

}
