<?php
include('classes.php');
include('classe_abstrata.php');
$ser_vivo = new SerVivo();
$ser_vivo->andar();
$ser_vivo->respirar();
echo "<hr/>";

$pessoa_1 = new Pessoa();
$pessoa_1->acenar();
$pessoa_1->andar();
$pessoa_1->respirar();
echo "<hr/>";

$cachorro_1 = new Cachorro();
$cachorro_1->latir();
$cachorro_1->andar();
$cachorro_1->respirar();
echo "<hr/>";


//Classe abstrata nao se instancia, apenas suas herancas
//$criatura = new Criatura(); -> FATAL ERROR.

$gato1 = new Gato();
$gato1->miar();
$gato1->andar();
$gato1->respirar();
echo "<hr/>";


?>