<?php 
namespace Controllers;
class cadastroUtensilioController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('cadastroUtensilio');
    }

    public function execute(){
        $this->view->render(array());
    }

}
