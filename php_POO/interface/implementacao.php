<?php
include('interface.php');

class MinhaCalculadora implements interfaceCalculadoraSimples{

    public function fazerSoma($n1,$n2)
    {
        return $n1+$n2;
    }

}


?>