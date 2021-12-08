<?php
include('classes.php');

$mensagem1 = new ClasseOlaMundo("Minha primeira mensagem");

$mensagem2 = new ClasseOlaMundo("Minha segunda mensagem");

$mensagem1->falarEmMaiusculo();
$mensagem2->falarEmMaiusculo();

echo ClasseEstatica::$var;
ClasseEstatica::$var = "Ola mundo estatico<br/>";
echo ClasseEstatica::$var;
ClasseEstatica::metodoEstatico();

?>