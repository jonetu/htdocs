<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1 class="container d-flex justify-content-center">
        Listar Veículos

    </h1>

    <?php
    //resgatar as informacoes de todos os carros
    $info = $parameter['carros'];
    ?>


    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Disponibilidade</th>
                    <th scope="col">Preço do Aluguel</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($info as $key => $value) {
                    echo   "<tr>";
                    echo   "<th scope='row'>" . $info[$key]['id'] . "</th>";
                    echo   "<td>" . $info[$key]['modelo'] . "</td>";
                    echo   "<td>" . $info[$key]['marca'] . "</td>";
                    echo   "<td>" . $info[$key]['placa'] . "</td>";
                    if ($info[$key]['disponibilidade']) {
                        echo   "<td>Disponível</td>";
                    } else {
                        echo   "<td>Indisponível</td>";
                    }
                    echo   "<td>R$ " . $info[$key]['precoDia'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>