<?php

namespace Models;

use PDO;

class AluguelModel
{

    public static function cadastrarAluguel($data_inicio, $data_fim, $carro, $cliente)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        if (self::carroIndisponivel($carro)) {
            return false;
        } else {

            $sql = $pdo->prepare("INSERT INTO `aluguel` (`id`, `dataInicio`, `carro`, `dataFim`, `cliente`) VALUES (NULL,?,?,?,?)");

            if ($sql->execute(array($data_inicio, $carro, $data_fim, $cliente))) {
                $sql = $pdo->prepare("INSERT INTO `historico` (`id`, `dataInicio`, `carro`, `dataFim`, `cliente`, `pagamento`) VALUES (NULL,?,?,?,?,0)");
                $sql->execute(array($data_inicio, $carro, $data_fim, $cliente));

                $sql = $pdo->prepare("UPDATE `carro` SET disponibilidade=? WHERE placa=? ");
                $sql->execute(array(0, $carro));
                return true;
            } else {
                return false;
            }
        }
    }

    public static function cadastrarAluguelEmFila($data_inicio, $data_fim, $carro, $cliente)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("INSERT INTO `aluguel` (`id`, `dataInicio`, `carro`, `dataFim`, `cliente`) VALUES (NULL,?,?,?,?)");
        $sql->execute(array($data_inicio, $carro, $data_fim, $cliente));

        $sql = $pdo->prepare("INSERT INTO `historico` (`id`, `dataInicio`, `carro`, `dataFim`, `cliente`, `pagamento`) VALUES (NULL,?,?,?,?,?)");
        $sql->execute(array($data_inicio, $carro, $data_fim, $cliente, 0));

        $sql = $pdo->prepare("UPDATE `carro` SET disponibilidade=? WHERE placa=? ");
        $sql->execute(array(0, $carro));
    }


    //verifica disponibilidade do veiculo antes do cadastro
    public static function carroIndisponivel($carro)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from `carro` WHERE disponibilidade=0 AND placa=?");
        $sql->execute(array($carro));
        return $sql->fetchAll();
    }

    //historico de alugueis ativos
    public static function historicoAluguel()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from `aluguel`");
        $sql->execute();
        return $sql->fetchAll();
    }

    //historico geral
    public static function historicoGeral()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from `historico`");
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
        self::atualizarPagamento($id);
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("DELETE FROM `aluguel` WHERE `id` = ?");
        $sql->execute(array($id));
        return $sql->fetchAll();
    }

    public static function atualizarPagamento($idAluguel)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from `aluguel`  WHERE id=?");
        $sql->execute(array($idAluguel));
        $info = $sql->fetchAll();
        $placaCarro = $info[0]['carro'];
        $cliente = $info[0]['cliente'];
        $sql = $pdo->prepare("UPDATE `historico` SET pagamento = 1 WHERE `carro` = ? AND `cliente` = ? ");
        $sql->execute(array($placaCarro, $cliente));
    }
}
