<?php 
namespace Controllers;
class ListarVeiculosController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('listarveiculos');
    }

    public function execute(){
        $this->view->render(array('titulo'=>'listarveiculos'));
    }

}
?>