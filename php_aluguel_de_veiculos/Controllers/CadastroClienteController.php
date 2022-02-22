<?php 
namespace Controllers;
class CadastroClienteController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('CadastroCliente');
    }

    public function execute(){
        if(isset($_POST['action'])){
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            if(\Models\ClienteModel::cadastrar($nome, $cpf, $email,$telefone)){
                echo "<script type='text/javascript'>alert('CADASTRADO COM SUCESSO');</script>";
            }else{
                echo "<script type='text/javascript'>alert('ERRO NO CADASTRO');</script>";
            }
            if(DEBUG){
                echo $nome;
                echo $cpf;
                echo $email;
                echo $telefone;
            }
        }
        $this->view->render(array('titulo'=>'Cadastro Cliente'));
    }

}
