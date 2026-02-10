<?php require_once "classes/pessoas.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lets Do It 1 - POO</h1>
    <?php
    $pessoa1 = new Pessoa();
    $pessoa1->setNome("marta oliveira");
    $pessoa1->setIdade(28);
    $pessoa1->setCorCabelo("Castanho");
    $pessoa1->setSexo("Feminino");
    
    echo " <h1> Nome: " . $pessoa1->getNome() . "</h1> <br>";
    echo " <h1> Idade: " . $pessoa1->getIdade() . "</h1> <br>";
    echo " <h1> Cor do Cabelo: " . $pessoa1->getCorCabelo() . "</h1> <br>";
    echo " <h1> Sexo: " . $pessoa1->getSexo() . "</h1> <br>";
    $pessoa1->aniversario();
    echo "<h1>" . $pessoa1->aniversario() . "</h1>";
    ?>
</body>
</html>