<!-- Exemplo pratico utilizando uma conta de banco -->
<?php
class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $statusAberta;
    public function __construct($numConta, $tipo, $dono){
        $this->numConta = $numConta;
        $this->tipo = $tipo;
        $this->dono = $dono;
        $this->saldo = 0;
    }
    public function abrirConta(){
        $this->statusAberta == false ? $this->statusAberta = true : print"A conta já está aberta";
        $this->tipo == "cp" ? $this->setSaldo(150) : $this->setSaldo(50);
    }
    public function fecharConta(){
        if($this->saldo == 0){
            $this->setStatusAberta(false);
            print("Conta fechada com sucesso.");
        }else{
            print("Você não pode fechar esta conta no momento.");
        }
    }
    public function depositar($valor){
        $this->statusAberta ? $this->saldo += $valor : print"Abra a conta primeiro.";
    }
    public function sacar($valor){
        $this->saldo >= $valor && $this->statusAberta == true ? $this->saldo -= $valor : print"Você não pode sacar essa quantia ou sua conta não está aberta.";
    }
    public function pagarMensalidade(){
        $this->tipo == "cp" ? $this->saldo -= 20 : $this->saldo -= 12; 
    }
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getStatusAberta(){
        return $this->statusAberta;
    }
    public function setStatusAberta($statusAberta){
        $this->statusAberta = $statusAberta;
    }
}
?>