<?php

class ClasseOlaMundo 
{
    public $mensagem;
    function __construct($parametro)
    {
        $this->mensagem = $parametro;
        echo "Oi, Sua mensagem: ".$this->mensagem."<br>";
    }

    public function falarEmMaiusculo(){
        echo "Oi, Sua mensagem em maiusculo: ".$this->tranformarEmMaiusculo()."<br/>";
    }

    private function tranformarEmMaiusculo(){
        return strtoupper($this->mensagem);
    }

}

class ClasseEstatica{

    public static $var = 'Ola mundo<br/>';

    public static function metodoEstatico(){
        echo "metodo estatico <br/>";
    }

}


?>