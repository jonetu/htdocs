<?php

showMensage();
showName("joao");
echo "<br/>sem parâmetro : ";
showName();
completeMensage();
$numero_1 = 10;
$numero_2 = 20;
echo "<br/>soma de $numero_1 com $numero_2 = " . soma($numero_1, $numero_2);
echo "<br/>subtracao de $numero_1 com $numero_2 = " . sub($numero_1, $numero_2);
echo "<br/>divisao de $numero_1 com $numero_2 = " . divisao($numero_1, $numero_2);
echo "<br/>resto de $numero_1 com $numero_2 = " . resto($numero_1, $numero_2);

function showMensage()
{
    echo "<br/>Bom Dia! ";
}
function showName($name = "default_name")
{
    echo "$name";
}

function completeMensage()
{
    showMensage();
    showName();
}

function soma($num1, $num2)
{
    return $num1 + $num2;
}
function sub($num1, $num2)
{
    return $num1 - $num2;
}
function divisao($num1, $num2)
{

    try {
        $div = $num1 / $num2;
        return $div;
    } catch (DivisionByZeroError $e) {
        return "ERROR";
    }
}
function resto($num1, $num2)
{

    try {
        $rest = $num1 % $num2;
        return $rest;
    } catch (DivisionByZeroError $e) {
        return "ERROR";
    }
}

function calculadora_completa($function = 1, $num1, $num2)
{

    switch ($function) {
        case 1:
            return soma($num1, $num2);
        case 2:
            return sub($num1, $num2);
        case 3:
            return divisao($num1, $num2);
        case 4:
            return resto($num1, $num2);
    }
}
