<?php 
namespace Controllers;
class CadastroVeiculoController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('CadastroVeiculo');
    }

    public function execute(){
        if(isset($_POST['action'])){
            echo 'clicado!';
            
            $placa = $_POST['placa'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $precoDia = $_POST['precoDia'];
            if(\Models\CadastrarModel::cadastrar($placa, $marca, $modelo,$precoDia)){
                echo 'true!';
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
?>