<?php 
namespace Controllers;
class ListarClientesController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('listarclientes');
    }

    public function execute(){
        $info = \Models\ClienteModel::listarClientes();
        $this->view->render(array('clientes'=>$info));
    }

}
