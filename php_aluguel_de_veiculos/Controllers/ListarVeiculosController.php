<?php 
namespace Controllers;

use PDO;

class ListarVeiculosController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('listarveiculos');
    }

    public function execute(){
        $info = \Models\VeiculoModel::listarVeiculos();
        $this->view->render(array('carros'=>$info));
    }

}
