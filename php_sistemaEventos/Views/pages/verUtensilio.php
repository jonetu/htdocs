<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <section class=" text-center bg-light">
        <div class="container">
            <h1 class="display-4"> Nossos Utensilios</h1>
        </div>
    </section>

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
                    echo "<td><strong><em>".$utensilios[$key]['nome']."</em></strong></td>";
                    if(strlen($utensilios[$key]['descricao']) > 54){
                        echo "<td class='text-muted'><small>".substr($utensilios[$key]['descricao'],0,53);
                        echo "<br>";
                        echo substr($utensilios[$key]['descricao'],53);
                    }else{
                        echo "<td class='text-muted'><small>".$utensilios[$key]['descricao'];
                    }
                    echo "</small></td>";
                    echo "<td class='text-info'>R$ ".$utensilios[$key]['preco']." por unidade</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>