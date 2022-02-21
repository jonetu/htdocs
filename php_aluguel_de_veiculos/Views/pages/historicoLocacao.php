<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h3 class="container d-flex justify-content-center">
        Histórico de Locação

    </h3>




    <?php
    $historico = $parameter['historico'];
    $clientes = $parameter['clientes'];
    $veiculos = $parameter['veiculos'];
    ?>


    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Data de Inicio</th>
                    <th scope="col">Data do Fim</th>
                    <th scope="col">Placa do carro</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Preço Final</th>
                    <th scope="col">Pagamento</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($historico as $key => $value) {
                    echo   "<tr>";
                    echo   "<th scope='row'>" . $historico[$key]['id'] . "</th>";
                    echo   "<td>" . $historico[$key]['dataInicio'] . "</td>";
                    echo   "<td>" . $historico[$key]['dataFim'] . "</td>";
                    echo   "<td>" . $historico[$key]['carro'] . "</td>";

                    foreach ($clientes as $cpf => $valor) {
                        if ($clientes[$cpf]["cpf"] == $historico[$key]['cliente']){
                            echo "<td>".$clientes[$cpf]["nome"]." - ".$clientes[$cpf]["cpf"]."</td>";
                        }
                    }
                    $datetime1 = date_create($historico[$key]['dataInicio']);
                    $datetime2 = date_create($historico[$key]['dataFim']);
                    $tempoDeAluguelEmDia  = date_diff($datetime1, $datetime2)->format('%d');
                    foreach ($veiculos as $placa => $valor) {
                        if ($veiculos[$placa]["placa"] == $historico[$key]['carro']){
                            echo "<td>R$".$veiculos[$placa]["precoDia"] * $tempoDeAluguelEmDia."</td>";
                        }
                    }
                    if($historico[$key]['pagamento']){
                        echo   "<td class='text-success' >PAGO</td>";
                    }else{
                        echo   "<td class='text-danger' >EM ABERTO</td>";
                    }
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>