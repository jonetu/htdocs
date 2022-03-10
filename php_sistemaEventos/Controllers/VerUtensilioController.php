<?php 
namespace Controllers;
class VerUtensilioController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('VerUtensilio');
    }

    public function execute(){
        $this->view->render(array());
    }

}
