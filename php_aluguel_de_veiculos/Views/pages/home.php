<!DOCTYPE html>
<html>

<body>
    <h3 class="container d-flex justify-content-center">
        Novo Aluguel
    </h3>


    <div class="container">
        <form method="post">




            <div class="form-group">
                <label for="exampleFormControlInput1">Selecione o carro disponível para o aluguel</label>
                <input list="carros" name="carros" class="form-control" />
                <datalist id="carros" name="carros">
                    <?php
                    //resgatar as informacoes de todos os carros
                    $carros = $parameter['carros'];
                    foreach ($carros as $key => $value) {
                        //mostrar apenas carros disponiveis
                        if ($carros[$key]['disponibilidade']) {
                            echo "<option value='" . $carros[$key]['placa'] . "'>";
                            echo $carros[$key]['modelo'] . " - " . $carros[$key]['marca'];
                        }
                    }
                    ?>
                </datalist>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Selecione o cliente</label>
                <input list="clientes" name="clientes" class="form-control" />
                <datalist id="clientes" name="clientes">
                    <?php
                    $clientes = $parameter['clientes'];
                    foreach ($clientes as $key => $value) {
                        echo "<option value='" . $clientes[$key]['cpf'] . "'>";
                        echo "nome: " . $clientes[$key]['nome'] . " - " . "telefone: " . $clientes[$key]['telefone'];
                    }
                    ?>
                </datalist>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Data de termino do Aluguel</label>
                <input type="date" class="form-control" id="data" name="data" min="<?php echo date("Y-m-d"); ?>">
            </div>

            <button type="submit" name="action" class="btn btn-success">Cadastrar Aluguel</button>
        </form>
    </div>
</body>
<!-- Script para evitar reenvio do form -->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>