<?php
require_once "Interface/Lutador.php";
class Lutador implements ILutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $quantidadeLutas;
    private $vitorias;
    private $derrotas;
    private $empates;
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso)
    {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias(0);
        $this->setDerrotas(0);
        $this->setEmpates(0);
        $this->quantidadeLutas = 0;
    }
    public function apresentar()
    {
        echo"Lutador: {$this->getNome()}, Origem: {$this->getNacionalidade()}, {$this->getIdade()} anos, {$this->getAltura()}m de altura, categoria: {$this->getCategoria()} Pesando: {$this->getPeso()}, com {$this->getQuantidadeLutas()} luta(s), sendo {$this->getVitorias()} vitoria(s), {$this->getDerrotas()} derrota(s), {$this->getEmpates()} empate(s).";
    }
    public function status()
    {
        echo"{$this->getNome()},{$this->getQuantidadeLutas()} luta(s), {$this->getVitorias()} vitoria(s), {$this->getDerrotas()} derrota(s), {$this->getEmpates()} empate(s).";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias()+1);
        $this->setQuantidadeLutas();
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas()+1);
        $this->setQuantidadeLutas();
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates()+1);
        $this->setQuantidadeLutas();
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($value)
    {
        $this->nome = $value;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($value)
    {
        $this->nacionalidade = $value;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($value)
    {
        $this->idade = $value;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($value)
    {
        $this->altura = $value;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($value)
    {
        $this->peso = $value;
        $this->setCategoria();
    }
    public function getVitorias()
    {
        return $this->vitorias;
    }
    public function setVitorias($value)
    {
        $this->vitorias = $value;
    }
    public function getDerrotas()
    {
        return $this->derrotas;
    }
    public function setDerrotas($value)
    {
        $this->derrotas = $value;
    }
    public function getEmpates()
    {
        return $this->empates;
    }
    public function setEmpates($value)
    {
        $this->empates = $value;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCategoria()
    {
        if($this->peso <= 70.3 && $this->peso > 52.2){
            $this->categoria = "Leve.";
        }else if($this->peso<=83.9 && $this->peso > 70.3){
            $this->categoria = "Médio.";
        } else if($this->peso<=120.2 && $this->peso > 83.9){
            $this->categoria = "Pesado.";
        } else{
            $this->categoria="Invalido para competir.";
        }
    }
    public function getQuantidadeLutas(){
        return $this->quantidadeLutas;
    }
    public function setQuantidadeLutas(){
        $this->quantidadeLutas = $this->getQuantidadeLutas() + 1;
    }
}
