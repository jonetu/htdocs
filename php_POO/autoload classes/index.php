<?php

    function myAutoLoad($class){
        if(file_exists('classes/'.$class.'.php')){
            include ('classes/'.$class.'.php');
        }
    }
    
    spl_autoload_register('myAutoLoad');
    $calculadora = new MinhaCalculadora();
    echo ' soma = '.$calculadora->fazerSoma(10,20)."<br/>";

    $pessoa1 = new Pessoa('Joao',180);
    $pessoa2 = new Pessoa('Maria',190);
    $pessoa1->Hello();
    $pessoa2->Hello();
?>