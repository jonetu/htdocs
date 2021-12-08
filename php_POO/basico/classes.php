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
        echo "Oi, Sua mensagem em maiusculo: ".strtoupper($this->mensagem)."<br/>";
    }

}

class ClasseEstatica{

    public static $var = 'Ola mundo<br/>';

    public static function metodoEstatico(){
        echo "metodo estatico <br/>";
    }

}


?>