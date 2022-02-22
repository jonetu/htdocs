<?php 
namespace Controllers;
class CadastroVeiculoController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('CadastroVeiculo');
    }

    public function execute(){
        if(isset($_POST['action'])){
            $placa = strtoupper($_POST['placa']);
            $marca = strtoupper($_POST['marca']);
            $modelo = strtoupper($_POST['modelo']);
            $precoDia = $_POST['precoDia'];
            if(\Models\VeiculoModel::cadastrar($placa, $marca, $modelo,$precoDia)){
                echo "<script type='text/javascript'>alert('CADASTRADO COM SUCESSO');</script>";
            }else{
                echo "<script type='text/javascript'>alert('ERRO NO CADASTRO');</script>";
            }
            if(DEBUG){
                echo $placa;
                echo $marca;
                echo $modelo;
                echo $precoDia;
            }
        }
        $this->view->render(array('titulo'=>'CadastroVeiculo'));
    }

}
