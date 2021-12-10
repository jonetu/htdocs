<?php
    include('calculadora.php');

    $calculadora = new Calculadora();
    $valor = $calculadora->dividir(10,1);
    echo $valor;
    echo '<hr>';
    

    $valor = $calculadora->porcentagem(89.9,50);
    echo $valor;
    echo '<hr>';

    $valor = $calculadora->exponencial(3,0);
    echo $valor;
    echo '<hr>';

    $calculadora = new CalculadoraCientifica();
    $valor = $calculadora->fatorial(3);
    echo $valor;
    echo '<hr>';

    $valor = $calculadora->raizquadrada(-144);
    echo $valor;
    echo '<hr>';

    $calculadora = new CalculadoraEngenharia();
    $valor = $calculadora->seno(30,false);
    echo $valor;
    echo '<hr>';

    $calculadora = new calculadoraObjetos();
    $valor = $calculadora->areaCirculo(4);
    echo $valor;
    echo '<hr>';

    $valor = $calculadora->areaTriangulo(4,4);
    echo $valor;
    echo '<hr>';
    $valor = $calculadora->distanciaDoisPontos(0,0,1,1);
    echo $valor;
    echo '<hr>';
?>