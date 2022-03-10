<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1 class="container d-flex justify-content-center">
        Nossos Utensilios

    </h1>

    <?php
    //resgatar as informacoes de todos os utensilios
    $utensilios = $parameter['utensilios'];
    ?>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço Unidade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($utensilios as $key => $value) {
                    echo "<td scope='row'><img src='uploads/utensilio/".$utensilios[$key]['foto']."' width=64 height=100%>"."</td>";
                    echo "<td>".$utensilios[$key]['nome']."</td>";
                    if(strlen($utensilios[$key]['descricao']) > 54){
                        echo "<td>".substr($utensilios[$key]['descricao'],0,53);
                        echo "<br>";
                        echo substr($utensilios[$key]['descricao'],53);
                        echo "</td>";
                    }else{
                        echo "<td>".$utensilios[$key]['descricao']."</td>";
                    }
                    echo "<td>R$ ".$utensilios[$key]['preco']."/unid</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>