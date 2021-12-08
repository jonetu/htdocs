<?php
include('interface/interfaceCalculadoraSimples.php');
class MinhaCalculadora implements interfaceCalculadoraSimples{
    public function fazerSoma($num1,$num2){
        return $num1 + $num2;
    }


}




?>