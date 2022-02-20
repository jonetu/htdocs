<?php 
namespace Controllers;
class HistoricoLocacaoController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('HistoricoLocacao');
    }

    public function execute(){
        $historico = \Models\AluguelModel::historicoAluguel();
        $clientes = \Models\ClienteModel::listarClientes();
        $veiculos = \Models\VeiculoModel::listarVeiculos();
        $this->view->render(array('historico'=>$historico,'clientes'=>$clientes,'veiculos'=>$veiculos));
    }

}
?>