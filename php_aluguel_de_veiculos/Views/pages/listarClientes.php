<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1 class="container d-flex justify-content-center">
        Listar Clientes

    </h1>

    <?php
    //resgatar as informacoes de todos os carros
    $info = $parameter['clientes'];
    ?>


<div class= "container">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">cpf</th>
                <th scope="col">email</th>
                <th scope="col">telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($info as $key => $value) {
                echo   "<tr>";
                echo   "<th scope='row'>" . $info[$key]['id'] . "</th>";
                echo   "<td>" . $info[$key]['nome'] . "</td>";
                echo   "<td>" . $info[$key]['cpf'] . "</td>";
                echo   "<td>" . $info[$key]['email'] . "</td>";
                echo   "<td>" . $info[$key]['telefone'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>

</html>