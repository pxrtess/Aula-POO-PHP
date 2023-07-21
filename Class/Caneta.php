<?php
class Caneta {
    public $modelo;
    private $ponta;
    private $cor;
    protected $carga;
    protected $tampada;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta=$p;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor=$cor;
    } 
    public function getCarga(){
        return $this->carga;
    }
    public function setCarga($c){
        $this->carga=$c;
    } 
    public function tampar(){
        $this->tampada = true;
    }
}