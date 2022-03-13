<?php

//session_start();
//setcookie('id','nome', time() + 360,'/');
//echo "cookie definido com valor: ".$_COOKIE['name']."Tempo de atividade do cookie: ".$tempo." segundos";
namespace Controllers;

use PDO;

class SelecionadoController extends Controller
{

    public function __construct()
    {

        $this->view = new \Views\View('selecionado');
    }

    public function execute()
    {

        $urlid = 0; // -> id passado como parametro na URL

        if (isset($_GET['id'])) {
            $urlid = $_GET['id'];


            setcookie('id', $urlid, time() - 1500000, '/');
            setcookie('id', $urlid, time() + 500000, '/');
            $urlid = $_COOKIE['id'];
            if (isset($_POST["submit"])) {
                $id = $_POST['id'];
                $quantidade = $_POST['quantidade'];
                \Models\UtensilioModel::colocarNaLista($id, $quantidade);
            } else if (isset($_POST["delete"])) {
                $id = $_POST['id'];
                \Models\UtensilioModel::POP_lista($id);
            }


            $lista = \Models\UtensilioModel::listarListaAtual();
            $selecionado = \Models\MontagemModel::getMontagemPorID($urlid);
            $utensilio = \Models\UtensilioModel::listarUtensilio();
            $this->view->render(array('existe' => true, 'selecionado' => $selecionado, 'utensilio' => $utensilio, 'lista' => $lista));
        }
        /*SIMPLESMENTE AGORA ESTA FUNCIONANDO DIREITO E ESSA PARTE DO CODIGO SE TORNOU INUTIL, MAS VOU DEIXAR AQUI CASO DEUS QUEIRA..*/
        //else {


        // if ($_SERVER['HTTP_REFERER']) {
        // $myid = $_COOKIE['id'];
        // if (isset($_POST["submit"])) {
        //     echo $_POST['id'];
        // }else{
        //     echo "Dont exist";
        // }


        // $myid =  substr($_SERVER['HTTP_REFERER'], -1);
        //     $selecionado = \Models\MontagemModel::getMontagemPorID($myid);
        //     $utensilio = \Models\UtensilioModel::listarUtensilio();
        //     $this->view->render(array('existe' => true, 'selecionado' => $selecionado, 'utensilio' => $utensilio));
        // } else {
        // include("Views/pages/templates/ERROR404.php");
        // die();
        // }
        //}
    }
}
