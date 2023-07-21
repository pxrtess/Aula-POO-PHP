<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "Class/Caneta.php";
    require_once "Class/Gato.php";
    $c1 = new Caneta;
    $c1->setModelo("BIC");
    $c1->setPonta(0.5);
    $c1->setCarga(80);
    print("Modelo: {$c1->getModelo()}, ponta: {$c1->getPonta()}, Carga: {$c1->getCarga()}");

    echo "<br><br>";
    // Metodo Construtor
    $g1 = new Gato("Hylander", 2, "Cinza");
    print("Nome do gato: {$g1->getNome()}, peso do gato: {$g1->getPeso()}, cor do pelo do gato: {$g1->getCorPelo()}");
    ?>
</body>
</html>