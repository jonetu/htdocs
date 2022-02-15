<?php 
namespace Models;

use PDO;

class CadastrarModel{


/**
 * Envia o cadastro do carro para o banco de dados.
 * @return FALSE Se ja estiver cadastrado.
 * @return TRUE Se tiver sucesso em cadastrar.
 */ 
    public static function cadastrar($placa, $marca, $modelo,$precoDia){
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("INSERT INTO `carro` (`placa`, `marca`, `modelo`, `precoDia`) VALUES (?,?,?,?)");
        return $sql->execute(array($placa, $marca, $modelo,$precoDia));
    }

}

?>