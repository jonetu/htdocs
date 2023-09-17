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
        // $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        // $sql = $pdo->prepare("SELECT * from utensilio");
        // $sql->execute();
        // $info = $sql->fetchAll();
        $info = [];
        return $info;
    }


    /**
     * Coloca na lista que apresente o contrato_ID maior, sendo assim, o ultimo contrato que estamos montando o evento
     */
    public static function colocarNaLista($id,$quantidade)
    {
        $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        $sql = $pdo->prepare("SELECT * from utensilio WHERE id=?");
        $sql->execute(array($id));
        $info = $sql->fetchAll();
        print_r($info[0]['nome']); 
        $precoFinal = $quantidade * $info[0]['preco'];
        $sql = $pdo->prepare("INSERT INTO `listadeutensilio` (`utensilio_Id`, `quantidade`, `precoFinal`, `contrato_Id`) VALUES (?,?,?,?)");
        $sql->execute(array($id,$quantidade,$precoFinal,0));
    }

    /**
     * A lista atual eh aquela que apresente listaAtual = 1, definida na regra de criacao da tabela (`listaAtual` INT NOT NULL DEFAULT '1')
     * 
     */
    public static function listarListaAtual(){
        $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        
        //$sql = $pdo->prepare("SELECT * from `listadeutensilio` WHERE `contrato_Id` = (SELECT MAX(`contrato_Id`) FROM `listadeutensilio`)");
        //$sql = $pdo->prepare("SELECT * from `listadeutensilio` LEFT JOIN `utensilio` ON listadeutensilio.utensilio_Id = utensilio.id WHERE `contrato_Id` = (SELECT MAX(`contrato_Id`) FROM `listadeutensilio`)");
        $sql = $pdo->prepare("SELECT * from `listadeutensilio` LEFT JOIN `utensilio` ON listadeutensilio.utensilio_Id = utensilio.id WHERE `listaAtual` = 1");
        $sql->execute();
        $info = $sql->fetchAll();
        return $info;
    }


    public static function POP_lista($itemid){
        $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        $sql = $pdo->prepare("DELETE FROM `listadeutensilio` WHERE utensilio_Id=?");
        $sql->execute(array($itemid));
    }

    /**
     * Retorna a lista de acordo com o parametro contrato_id fornecido
     */
    public static function GET_Lista($contrato_Id){
        // $pdo = new PDO(__DSN__, __USERNAME__, __PASSWORD__);
        // $sql = $pdo->prepare("SELECT * from `listadeutensilio` WHERE `contrato_Id` = ?");
        // $sql->execute(array($contrato_Id));
        // $info = $sql->fetchAll();
        $info = [];
        return $info;
    }


}
