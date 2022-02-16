<?php

namespace Models;

use PDO;

class VeiculoModel
{


    /**
     * Envia o cadastro do carro para o banco de dados.
     * @return FALSE Se ja estiver cadastrado.
     * @return TRUE Se tiver sucesso em cadastrar.
     */
    public static function cadastrar($placa, $marca, $modelo, $precoDia)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');


        //Verificar se ja está cadastrado
        $sql = $pdo->prepare("SELECT * from carro WHERE placa='" . $placa . "'");
        $sql->execute();
        $info = $sql->fetchAll();
        if (empty($info)) {
            $sql = $pdo->prepare("INSERT INTO `carro` (`placa`, `marca`, `modelo`, `precoDia`) VALUES (?,?,?,?)");
            return $sql->execute(array($placa, $marca, $modelo, $precoDia));
            return true;
        } else {
            return false;
        }
        if (DEBUG) {
            echo ' <pre>';
            print_r($info);
            echo ' </pre>';
        }
    }

    public static function listarVeiculos()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from carro");
        $sql->execute();
        $info = $sql->fetchAll();
        return $info;
    }
}
