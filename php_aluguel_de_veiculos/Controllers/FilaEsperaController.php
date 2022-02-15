<?php 
namespace Controllers;
class FilaEsperaController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('FilaEspera');
    }

    public function execute(){
        $this->view->render(array('titulo'=>'FilaEspera'));
    }

}
?>