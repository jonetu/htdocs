<?php

namespace Controllers;

use PDO;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->view = new \Views\View('home');
    }

    public function execute()
    {
        if (isset($_POST['action'])) {
            $data_inicio = date("Y-m-d");
            $data_fim = $_POST['data'];
            $carro  = $_POST['carros'];
            $cliente  = $_POST['clientes'];
            if (\Models\AluguelModel::cadastrarAluguel($data_inicio, $data_fim, $carro, $cliente)) {
                echo "<script type='text/javascript'>alert('CADASTRADO COM SUCESSO');</script>";
            } else {
                echo "<script type='text/javascript'>alert('ERRO NO CADASTRO');</script>";
            }
            header("Refresh:0");
        }

        $carros = \Models\VeiculoModel::listarVeiculos();
        $clientes = \Models\ClienteModel::listarClientes();
        $this->view->render(array('carros' => $carros, 'clientes' => $clientes));
    }
}
