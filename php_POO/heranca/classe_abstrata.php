<?php

abstract class Criatura
{
    public function andar(){
        echo "Estou andando...<br/>";
    }
    public function respirar(){
        echo "Estou respirando...<br/>";
    }

}

class Gato extends Criatura{

    public function miar(){
        echo "Miau!<br/>";
    }
    
}

class Cao extends Criatura{

    public function latir(){
        echo "au au!<br/>";
    }
    
}


?>