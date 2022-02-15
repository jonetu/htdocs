<?php 
namespace Controllers;
class CadastroClienteController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('CadastroCliente');
    }

    public function execute(){
        $this->view->render(array('titulo'=>'Cadastro Cliente'));
    }

}
?>