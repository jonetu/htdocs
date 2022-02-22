<?php

namespace Models;

use PDO;

class FilaModel
{

    public static function listarFila()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("SELECT * from `fila`");
        $sql->execute();
        return $sql->fetchAll();
    }

    /**
     * Registrar aluguel para a fila
     * @param carro Veiculo escolhido
     * @param cliente Cliente a espera
     * @param dias dias previstos para registrar aluguel quando chegar a vez do aluguel na fila
     */
    public static function colocarNaFila($carro, $cliente, $dias)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');

        $sql = $pdo->prepare("SELECT * from `fila` WHERE `carro` = ? AND `cliente` = ? ");
        $sql->execute(array($carro, $cliente));
        $info = $sql->fetchAll();
        if ($info) {
            echo "<script type='text/javascript'>alert('CLIENTE JA NA FILA ESPERANDO O VEICULO');</script>";
        } else {
            $sql = $pdo->prepare("SELECT * from `fila` WHERE `carro` = ?");
            $sql->execute(array($carro));
            $info = $sql->fetchAll();
            $maiorPosicao = 1;
            foreach ($info as $key => $value) {
                if ($maiorPosicao <= $info[$key]['posicao']) {
                    $maiorPosicao = $info[$key]['posicao'] + 1;
                }
            }
            $sql = $pdo->prepare("INSERT INTO `fila` (`id`, `carro`, `cliente`, `diasDeAluguel`, `posicao`) VALUES (NULL,?,?,?,?)");
            $sql->execute(array($carro, $cliente, $dias, $maiorPosicao));
            echo "<script type='text/javascript'>alert('COLOCADO NA FILA');</script>";
            header("Refresh:0");
        }
    }

    public static function proximoDaFila($carro)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');


        //checar se existe alguem na fila
        $sql = $pdo->prepare("SELECT * from `fila` WHERE carro=? AND posicao = 1");
        $sql->execute(array($carro));
        $info = $sql->fetchAll();
        if (!$info) {
            if (DEBUG) echo "fila vazia :)";
            self::disponibilizarCarro($carro);
        } else {
            if (DEBUG) {
                echo $info[0]['carro'];
                echo "<br>";
                echo $info[0]['cliente'];
                echo "<br>";
                echo $info[0]['diasDeAluguel'];
                echo "<br>";
            }
            $cliente = $info[0]['cliente'];
            $data_inicio =  date("Y-m-d");
            $data_fim =  date("Y-m-d", strtotime($data_inicio . " + " . $info[0]['diasDeAluguel'] . " days"));
            echo "datafim= " . $data_fim;
            \Models\AluguelModel::cadastrarAluguelEmFila($data_inicio, $data_fim, $carro, $cliente);
            //alterar posicoes
            $sql = $pdo->prepare("UPDATE `fila` SET posicao = posicao - 1 WHERE `carro` = ?");
            $sql->execute(array($carro));
            $sql->fetchAll();
            //POP primeira posicao
            $sql = $pdo->prepare("DELETE FROM `fila` WHERE `posicao` = 0");
            $sql->execute();
        }
    }
    public static function disponibilizarCarro($carro)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=locadora', 'root', '');
        $sql = $pdo->prepare("UPDATE `carro` SET disponibilidade=? WHERE placa=? ");
        $sql->execute(array(1, $carro));
    }
}
