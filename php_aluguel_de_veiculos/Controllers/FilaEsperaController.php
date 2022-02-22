<?php 
namespace Controllers;
class FilaEsperaController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('FilaEspera');
    }

    public function execute(){
        $carros = \Models\VeiculoModel::listarVeiculos();
        $clientes = \Models\ClienteModel::listarClientes();
        $fila = \Models\FilaModel::listarFila();
        if(isset($_POST['action'])){
            $carro = strtoupper($_POST['carros']);
            $cliente = $_POST['clientes'];
            $dias = $_POST['diasDeAluguel'];
            \Models\FilaModel::colocarNaFila($carro,$cliente,$dias);
        }

        $this->view->render(array('titulo'=>'FilaEspera','carros'=>$carros,'clientes'=>$clientes,'fila'=>$fila));
    }

}
