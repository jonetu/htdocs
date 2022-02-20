<!DOCTYPE html>
<html>

<body>
    <h3 class="container d-flex justify-content-center">
        Fila de espera
    </h3>


    <div class="container">
        <form method="post">




            <div class="form-group">
                <label for="exampleFormControlInput1">Selecione o carro indisponível para o aluguel</label>
                <input list="carros" name="carros" class="form-control" />
                <datalist id="carros" name="carros">
                    <?php
                    //resgatar as informacoes de todos os carros
                    $carros = $parameter['carros'];
                    foreach ($carros as $key => $value) {
                        //mostrar apenas carros indisponiveis
                        if (!$carros[$key]['disponibilidade']) {
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
                <label for="exampleFormControlInput1">Quantidade de dias de aluguel previsto</label>
                <input type="number" class="form-control" name="diasDeAluguel" min="1" max="120" placeholder="Ex: 1...120">
            </div>

            <div class="container d-flex justify-content-center">
                <button type="submit" name="action" class="btn btn-success ">Registrar na fila de espera</button>
            </div>
        </form>
    </div>

    <br>

    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Placa do Carro</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Posição de espera</th>
                    <th scope="col">Dias previstos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $info = $parameter['fila'];

                foreach ($info as $key => $value) {
                    echo   "<tr>";
                    echo   "<th scope='row'>" . $info[$key]['id'] . "</th>";
                    echo   "<td>" . $info[$key]['carro'] . "</td>";
                    echo   "<td>" . $info[$key]['cliente'] . "</td>";
                    echo   "<td>" . $info[$key]['posicao'] . "º na fila</td>";
                    echo   "<td>" . $info[$key]['diasDeAluguel'] . " dias</td>";

                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>

    <?php
    if (!$info) {
        echo "<h3 class='container d-flex justify-content-center text-warning'>
        Nenhum registro na fila
        </h3>";
    }

    ?>

</body>
<!-- Script para evitar reenvio do form -->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>