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

        $montagem = \Models\MontagemModel::listarMontagem();
        $this->view->render(array('montagem' => $montagem));
    }
}
