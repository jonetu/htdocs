<?php

namespace Controllers;

use PDO;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->view = new \Views\View('home');
    }

    public function execute()
    {
        if(isset($_POST['search'])){
            echo "pesquisa nao foi implementada... <br>";
            echo "Item a ser pesquisado: ".$_POST['search'];
        }
        $montagem = \Models\MontagemModel::listarMontagem();
        $this->view->render(array('montagem' => $montagem));
    }
}
