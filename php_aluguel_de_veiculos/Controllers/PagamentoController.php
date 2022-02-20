<?php 
namespace Controllers;
class PagamentoController extends Controller{

    public function __construct()
    {
        $this->view = new \Views\View('pagamento');
    }

    public function execute(){
        $veiculos = \Models\VeiculoModel::listarVeiculos();
        $alugueis = \Models\AluguelModel::historicoAluguel();
        $aluguelSelecionado = 0;
        $veiculo = array();

        if (isset($_POST['search'])) {
            $aluguelSelecionado = \Models\AluguelModel::pesquisarAluguel($_POST['alugueis']);
            foreach ($veiculos as $placa => $valor) {
                if ($veiculos[$placa]["placa"] == $aluguelSelecionado[0]["carro"]) {
                    $veiculo = $veiculos[$placa];
                }

            }

        }
        if(isset($_POST['action'])){
            $aluguelSelecionadoParaFinalizar = $_POST['aluguelselecionado'];
            echo "finalizar pagamento concluido!".$aluguelSelecionadoParaFinalizar;
            $aluguelSelecionado = \Models\AluguelModel::pesquisarAluguel($aluguelSelecionadoParaFinalizar);
            \Models\FilaModel::proximoDaFila($aluguelSelecionado[0]["carro"]);


            \Models\AluguelModel::finalizarAluguel($aluguelSelecionadoParaFinalizar);

            //header("Refresh:0");
        }

        $this->view->render(array('alugueis'=>$alugueis,'aluguelselecionado'=>$aluguelSelecionado, 'veiculo'=>$veiculo));
    }

}
?>