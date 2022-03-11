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
        $myid = 0;

        if (isset($_GET['id'])) {

            $myid = $_GET['id'];
            setcookie('id',$myid, time() - 1500000,'/');
            setcookie('id',$myid, time() + 500000,'/');
            $selecionado = \Models\MontagemModel::getMontagemPorID($myid);
            $utensilio = \Models\UtensilioModel::listarUtensilio();
            $this->view->render(array('existe' => true, 'selecionado' => $selecionado, 'utensilio' => $utensilio));
        } else {
            // include("Views/pages/templates/ERROR404.php");
            // die();

            if ($_SERVER['HTTP_REFERER']) {
                $myid = $_COOKIE['id'];
                if (isset($_POST["submit"])) {
                    echo "look";
                    setcookie('myarray',array('nome' => 'carlos', 'idade' => 20), time() - 1500000,'/');
                }else{
                    echo "Dont look";
                }
                

                // $myid =  substr($_SERVER['HTTP_REFERER'], -1);
                $selecionado = \Models\MontagemModel::getMontagemPorID($myid);
                $utensilio = \Models\UtensilioModel::listarUtensilio();
                $this->view->render(array('existe' => true, 'selecionado' => $selecionado, 'utensilio' => $utensilio));
            }
        }

        
    }
}
