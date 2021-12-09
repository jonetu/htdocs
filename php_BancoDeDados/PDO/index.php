<?php
    define('HOST','localhost');
    define('DATABASE','mybd');
    define('USER', 'root');
    define('PASSWORD','');

    try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'',USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo 'conectado com sucesso';
    } catch (Exception $e) {
        echo 'erro ao conectar';
    }
    
    

?>