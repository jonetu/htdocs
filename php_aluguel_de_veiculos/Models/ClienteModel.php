<?php

namespace Models;

use PDO;

class ClienteModel
{


    /**
     * Envia o cadastro do cliente para o banco de dados.
     * @return FALSE Se ja estiver cadastrado.
     * @return TRUE Se tiver sucesso em cadastrar.
     */
    public static function cadastrar($nome, $cpf, $email, $telefone)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');


        //Verificar se ja está cadastrado
        $sql = $pdo->prepare("SELECT * from cliente WHERE cpf='" . $cpf . "'");
        $sql->execute();
        $info = $sql->fetchAll();
        if (empty($info)) {
            $sql = $pdo->prepare("INSERT INTO `cliente` (`nome`, `cpf`, `email`, `telefone`) VALUES (?,?,?,?)");
            return $sql->execute(array($nome, $cpf, $email, $telefone));
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

    public static function listarClientes()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from cliente");
        $sql->execute();
        $info = $sql->fetchAll();
        return $info;
    }
}
