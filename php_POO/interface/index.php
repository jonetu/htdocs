<?php
include('implementacao.php');


$calculadora = new MinhaCalculadora();
$resultado = $calculadora->fazerSoma(1,2);
echo " soma = ".$resultado;


?>