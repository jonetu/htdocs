<!DOCTYPE html>
<html>

<body>
    <h3 class="container d-flex justify-content-center">
        Pagamento e finalização de aluguel
    </h3>


    <div class="container">
        <form method="post">

            <div class="form-group">
                <label for="exampleFormControlInput1">Selecione o aluguel</label>
                <input list="alugueis" name="alugueis" class="form-control " required />
                <datalist id="alugueis" name="alugueis">
                    <?php
                    $alugueis = $parameter['alugueis'];
                    foreach ($alugueis as $key => $value) {
                        echo "<option value='" . $alugueis[$key]['id'] . "'>";
                        echo "data:" . $alugueis[$key]['dataInicio'] . " a " . $alugueis[$key]['dataFim'] . ", carro: " . $alugueis[$key]['carro'] . ", cliente: " . $alugueis[$key]['cliente'];
                    }

                    ?>
                </datalist>
            </div>
            <div class="container d-flex justify-content-center">
                <button type="submit" name="search" class="btn btn-secondary ">Verificar Aluguel</button>
            </div>
        </form>
    </div>
    <br>

    <div class="container d-flex justify-content-center">
        <form method="post">
            <div class="container">
                <?php
                if (isset($_POST['search'])) {
                    echo "<p class='lead'>";
                    $veiculo = $parameter['veiculo'];
                    $aluguel = $parameter['aluguelselecionado'];
                    echo " Placa do carro ---> " . $aluguel[0]["carro"];
                    echo "<br>";
                    echo " Cliente ---> " . $aluguel[0]["cliente"];
                    echo "<br>";
                    $datetime1 = date_create($aluguel[0]['dataInicio']);
                    $datetime2 = date_create($aluguel[0]['dataFim']);
                    $tempoDeAluguelEmDia  = date_diff($datetime1, $datetime2)->format('%d');
                    echo "Tempo de aluguel ---> " . $tempoDeAluguelEmDia . " dias";
                    echo "<br>";
                    echo "preço por dia ---> R$" . $veiculo["precoDia"];
                    echo "<br>";
                    echo "preço final: R$" . $tempoDeAluguelEmDia * $veiculo["precoDia"];
                    echo "<input type='hidden' name='aluguelselecionado' value='".$aluguel[0]['id']."'>";
                    echo "</p>";
                    echo "<button type='submit' name='action' class='btn btn-success '>Finalizar Pagamento</button>";
                }
                ?>
            </div>
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