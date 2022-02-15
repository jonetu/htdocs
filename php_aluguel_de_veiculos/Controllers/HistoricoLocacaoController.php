<?php 
namespace Controllers;
class HistoricoLocacaoController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('HistoricoLocacao');
    }

    public function execute(){
        $this->view->render(array('titulo'=>'HistoricoLocacao'));
    }

}
?>