<?php 
namespace Controllers;
class CadastroPessoaController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('cadastropessoa');
    }

    public function execute(){
        $this->view->render(array('titulo'=>'cadastropessoa'));
    }

}
?>