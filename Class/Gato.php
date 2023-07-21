<?php
class Gato{
    public $nome;
    private $peso;
    protected $corPelo;

    public function __construct($n , $p, $cp) {
        $this->nome=$n;
        $this->peso=$p;
        $this->corPelo=$cp;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getPeso(){
        return $this->peso;
    }
    
    public function getCorPelo(){
        return $this->corPelo;
    }
}