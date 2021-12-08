<?php

class SerVivo
{
    public function andar(){
        echo "Estou andando...<br/>";
    }
    public function respirar(){
        echo "Estou respirando...<br/>";
    }

}

class Pessoa extends SerVivo{

    public function acenar(){
        echo "ola eu sou uma pessoa!<br/>";
    }
    
}

class Cachorro extends SerVivo{

    public function latir(){
        echo "AU AU!<br/>";
    }
    
}


?>