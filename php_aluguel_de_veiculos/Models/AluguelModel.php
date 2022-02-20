<?php

namespace Models;

use PDO;

class AluguelModel
{

    public static function cadastrarAluguel($data_inicio,$data_fim,$carro,$cliente)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("INSERT INTO `aluguel` (`id`, `dataInicio`, `carro`, `dataFim`, `cliente`) VALUES (NULL,?,?,?,?)");
        if($sql->execute(array($data_inicio, $carro, $data_fim,$cliente))){
            $sql = $pdo->prepare("UPDATE `carro` SET disponibilidade=? WHERE placa=? ");
            $sql->execute(array(0, $carro));
            return true;
        }else{
            return false;
        }

    }

    public static function historicoAluguel()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from `aluguel`");
        $sql->execute();
        return $sql->fetchAll();

    }

    //pesquisar aluguel por id
    public static function pesquisarAluguel($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from `aluguel`  WHERE id=?");
        $sql->execute(array($id));
        return $sql->fetchAll();

    }

    public static function finalizarAluguel($id)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("DELETE FROM `aluguel` WHERE `id` = ?");
        $sql->execute(array($id));
        return $sql->fetchAll();
    }
}
