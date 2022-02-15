<?php 
namespace Controllers;
class ListarClientesController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('listarclientes');
    }

    public function execute(){
        $this->view->render(array('titulo'=>'listarclientes'));
    }

}
?>