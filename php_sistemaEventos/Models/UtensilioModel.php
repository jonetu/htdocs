<?php

namespace Models;

use PDO;

class UtensilioModel
{


    /**
     * Envia o cadastro para o banco de dados.
     */
    public static function cadastrar($nome, $descricao, $preco, $foto)
    {
        $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        $sql = $pdo->prepare("INSERT INTO `utensilio` (`nome`,`descricao`,`preco`, `foto` ) VALUES (?,?,?,?)");
        $sql->execute(array($nome, $descricao, $preco, $foto));
    }

    public static function listarUtensilio()
    {
        $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        $sql = $pdo->prepare("SELECT * from utensilio");
        $sql->execute();
        $info = $sql->fetchAll();
        return $info;
    }
}
