<?php
require_once "Lutador.php";
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
            $this->aprovada = true;
            $this->desafiante =  $l1;
            $this->desafiado = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiante =  null;
            $this->desafiado = null;
        }
    }

    public function lutar()
    {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            echo"<br>";
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo("<p>Empatou</p>");
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo("<p>".$this->desafiante->getNome()."é  o vencedor da luta!</p>");
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                case 2:
                    echo("<p>".$this->desafiado->getNome()." é  o vencedor da luta!</p>");
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
            }
            $this->desafiante->status();
            echo("<br>");
            $this->desafiado->status();
        } else {
            echo "<p>A luta não pode acontecer!!</p>";
        }
    }

    function getDesafiado()
    {
        return $this->desafiado;
    }
    function setDesafiado($value)
    {
        $this->desafiado = $value;
    }
    function getDesafiante()
    {
        return $this->desafiante;
    }
    function setDesafiante($value)
    {
        $this->desafiante = $value;
    }
    function getRounds(){
        return $this->rounds;
    }
    function setRounds($value){
        $this->rounds = $value;
    }
}
