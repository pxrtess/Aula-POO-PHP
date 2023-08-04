<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    require_once "Class/Caneta.php";
    require_once "Class/Gato.php";
    require_once "Class/ContaBanco.php";
    require_once "Class/ControleRemoto.php";
    require_once "Class/Lutador.php";
    require_once "Class/Luta.php";
    
    echo"<h2>Classe Simples - Objeto Caneta</h2>";
    $c1 = new Caneta;
    $c1->setModelo("BIC");
    $c1->setPonta(0.5);
    $c1->setCarga(80);
    print("Modelo: {$c1->getModelo()}, ponta: {$c1->getPonta()}, Carga: {$c1->getCarga()}");

    echo "<br><br>";
    
    // Metodo Construtor
    echo"<h2>Metodo Construtor - Objeto Gato</h2>";
    $g1 = new Gato("Hylander", 2, "Cinza");
    print("Nome do gato: {$g1->getNome()}, peso do gato: {$g1->getPeso()}, cor do pelo do gato: {$g1->getCorPelo()}");
    
    echo "<br><br>";
    
    // Exemplo Pratico Usando uma Conta de Banco
    echo"<h2>Exemplo Pratico - Conta de Banco</h2>";
    $conta1 = new ContaBanco(1, "cp", "Pedro");
    print("Numero da conta: {$conta1->getNumConta()}, tipo de conta: {$conta1->getTipo()}, dono: {$conta1->getDono()}, saldo: {$conta1->getSaldo()}, status: {$conta1->getStatusAberta()}");
    echo"<br>"; 
    $conta1->abrirConta();
    print("Numero da conta: {$conta1->getNumConta()}, tipo de conta: {$conta1->getTipo()}, dono: {$conta1->getDono()}, saldo: {$conta1->getSaldo()}, status: {$conta1->getStatusAberta()}");
    echo"<br>";
    $conta1->fecharConta();
    echo"<br>";
    $conta1->sacar(150);
    $conta1->fecharConta(); 
    print($conta1->getStatusAberta());

    echo"<br><br>";

    // Encapsulamento
    echo"<h2>Encapsulamento - Controle Remoto</h2>";
    $controleRemoto = new ControleRemoto;
    $controleRemoto->ligarDesligar();
    $controleRemoto->playPause();
    $controleRemoto->abrirFecharMenu();
    $controleRemoto->maisVolume();
    $controleRemoto->menosVolume();
    $controleRemoto->abrirFecharMenu();
    $controleRemoto->ligarDesligar();
    
    // Relacionamento Entre Classes
    echo"<h2>Relacionamento entre Classes - Lutador e Lutas</h2>";
    $lutador = [];
    $lutador[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9);
    $lutador[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8);
    $lutador[2] = new Lutador("Snapshadow", "Estados Unidos", 34, 1.89, 103.4);
    $lutador[3]= new Lutador("Anderson", "Italia", 27, 1.74, 83.5);
    $UEC01 = new Luta;
    $UEC01->marcarLuta($lutador[0], $lutador[1]);
    $UEC01->lutar();
    ?>
    </pre>
</body>
</html>