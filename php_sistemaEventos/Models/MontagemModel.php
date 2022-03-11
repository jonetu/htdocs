<?php

namespace Models;

use PDO;

class MontagemModel
{


    /**
     * Envia o cadastro para o banco de dados.
     */
    public static function cadastrar($nome, $tema, $descricao, $foto, $preco)
    {
        $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        $sql = $pdo->prepare("INSERT INTO `montagem` (`nome`, `tema`, `descricao`, `foto` , `preco`) VALUES (?,?,?,?,?)");
        $sql->execute(array($nome, $tema, $descricao, $foto, $preco));
    }

    public static function listarMontagem()
    {
        $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        $sql = $pdo->prepare("SELECT * from montagem");
        $sql->execute();
        $info = $sql->fetchAll();
        return $info;
    }
    
    public static function getMontagemPorID($id)
    {
        $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        $sql = $pdo->prepare("SELECT * from montagem WHERE id=?");
        $sql->execute(array($id));
        $info = $sql->fetchAll();
        return $info;
    }
}
