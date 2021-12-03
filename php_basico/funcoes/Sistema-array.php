<?php 
$array1 = array("valor0","valor1","valor2");
$array2 = array("valor3","valor4","valor5");
print_r(array_merge($array1,$array2));

$array1 = array("valor0","valor1","valor2");
$array2 = array("valor3","valor4","valor5","valor1");
echo "<br/>";

//intersecção de dois conjuntos de arrays
print_r(array_intersect($array1,$array2));
echo "<br/>";


//Funcoes de string para todos os valores do array
$codigohtml = ['<p>paragrafo</p>','texto','<h3>titulo</h3>'];
$semTags =array_map('strip_tags',$codigohtml); 
print_r($semTags);
echo "<br/>";

$nomeMinusculo = ['joao','maria','jose'];
$inicialMaiuscula =array_map('ucwords',$nomeMinusculo); 
print_r($inicialMaiuscula);
echo "<br/>";

$nomes = ['aviao','moto','aeroporto'];
$contar =array_map('contarLetras',$nomes); 
print_r($contar);
echo "<br/>";

function contarLetras($string){

    return "quantidade: ".strlen($string);
}
?>
