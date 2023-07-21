<!-- ENCAPSULAMENTO -->
<?php
require_once "Interface/Controlador.php";
class ControleRemoto implements IControlador
{
    private $volume;
    private $ligado;
    private $tocando;
    private $menu;
    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
        $this->menu = false;
    }
    public function getLigado()
    {
        return $this->ligado;
    }
    public function setLigado($value)
    {
        $this->ligado = $value;
    }
    public function getVolume()
    {
        return $this->volume;
    }
    public function setVolume($value)
    {
        $this->volume = $value;
    }
    public function getTocando()
    {
        return $this->tocando;
    }
    public function setTocando($value)
    {
        $this->tocando = $value;
    }
    public function getMenu()
    {
        return $this->menu;
    }
    public function setMenu($value)
    {
        $this->menu = $value;
    }
    public function ligarDesligar()
    {
        if ($this->ligado) {
            $this->setLigado(false);
            echo"<br>Desligando...<br>";
        } else {
            $this->setLigado(true);
            echo"<br>Ligando...<br>";
        }
    }
    public function abrirFecharMenu()
    {
        if (!$this->getMenu()) {
            echo "<hr>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
            echo "<br>Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO");
            echo "<br>Volume: " . $this->getVolume();
            for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo "|";
            }
            echo "<hr>";
            $this->setMenu(true);
        } else {
            echo "<br>Fechando menu...";
            $this->setMenu(false);
        }
    }
    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
            echo "<br>Volume: " . $this->getVolume();
            for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo "|";
            }
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado()) {
            if ($this->getVolume() != 0) {
                $this->setVolume($this->getVolume() - 5);
                echo "<br>Volume: " . $this->getVolume();
                for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                    echo "|";
                }
            } else {
                echo $this->getVolume();
            }
        }
    }
    public function ligarDesligarMudo()
    {
        if ($this->getLigado()) {
            if ($this->getVolume() > 0) {
                $this->setVolume(0);
            } else {
                $this->setVolume(50);
            }
        }
    }
    public function playPause()
    {
        if ($this->getLigado()) {
            if ($this->getTocando()) {
                $this->setTocando(false);
                echo "Pausado.";
            } else {
                $this->setTocando(true);
                echo "Tocando.";
            }
        }
    }
}
?>