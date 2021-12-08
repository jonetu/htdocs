<?php

class Pessoa{
    public $nome;
    public $altura;

    function __construct($nome,$altura)
    {
        $this->nome= $nome;
        $this->altura = $altura;

    }
    public function Hello(){
        echo " Ola me chamo ".$this->nome." com altura: ".$this->altura."<br/> ";
    }

}
?>