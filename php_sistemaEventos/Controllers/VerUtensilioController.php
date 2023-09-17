<?php 
namespace Controllers;
class VerUtensilioController extends Controller{
    private $view;
    public function __construct()
    {
        $this->view = new \Views\View('VerUtensilio');
    }

    public function execute(){
        $utensilio = \Models\UtensilioModel::listarUtensilio();
        $this->view->render(array('utensilios' => $utensilio));
    }

}
