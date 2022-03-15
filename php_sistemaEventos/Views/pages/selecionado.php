<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <section class=" text-center bg-light">
        <div class="container">
            <h1 class="display-4"> Montar Esquema</h1>
        </div>
    </section>

    <?php
    $selecionado = $parameter['selecionado'];
    $utensilios = $parameter['utensilio'];
    $lista = $parameter['lista'];
    $precoDosItensDaLista = 0;
    ?>
    <div class="container">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <?php

            echo "<img class='card-img-right' alt='erro imagem nao encontrada' style='width: 250px; height: 250px;' src='uploads/" . $selecionado[0]['foto'] . "' data-holder-rendered='true'>";
            ?>
            <!-- <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17f79086de7%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17f79086de7%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> -->
            <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-muted">Montagem Selecionada, tema: <?php echo ucfirst($selecionado[0]['tema']); ?></strong>
                <h3 class="mb-0">
                    <a class="text-primary"><?php echo $selecionado[0]['nome']; ?></a>
                </h3>
                <p class="card-text mb-auto"><?php echo $selecionado[0]['descricao']; ?></p>
                <div class="mb-1 text-muted">Preço de base: <p class="d-inline-block text-primary">R$<?php echo $selecionado[0]['preco']; ?></p></div>
                <a href="home">Escolher outro</a>
            </div>

        </div>
    </div>




    <?php
    if ($lista) {
        echo "<div class='container'>";
        echo "<table class='table table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col'>Imagem</th>";
        echo "<th scope='col'>Nome</th>";
        echo "<th scope='col'>Preço Unidade</th>";
        echo "<th scope='col'>Quantidade</th>";
        echo "<th scope='col'>Preço</th>";
        echo "<th scope='col'>Tirar da lista</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";


        if (DEBUG) {
            echo "tem coisa na lista";
            echo "<pre>";
            print_r($lista);
            echo "</pre>";
        }
        foreach ($lista as $key => $value) {
            echo "<td scope='row'><img src='uploads/utensilio/" . $lista[$key]['foto'] . "' width=64 height=100%>" . "</td>";
            echo "<td><strong><em>" . $lista[$key]['nome'] . "</em></strong></td>";
            echo "<td><small>R$ " . $lista[$key]['preco'] . " por unidade</small></td>";
            if($lista[$key]['quantidade'] == 1 ){
                echo "<td>" . $lista[$key]['quantidade'] . " unidade</td>";
                
            }else{
                echo "<td>" . $lista[$key]['quantidade'] . " unidades</td>";
            }
            echo "<td class='text-info'>R$ " . $lista[$key]['precoFinal'] . "</td>";
            $precoDosItensDaLista += $lista[$key]['precoFinal'];
            
            echo "<td>
        <form method='post' name='delete' value='delete' enctype='multipart/form-data' class='form-inline'>
        <div class='form-group'>
        <input type='hidden' name='id' value='" . $lista[$key]['id'] . "'>
        </div>
        <button  type='delete' name='delete' value='delete' class='btn btn-danger btn-sm'>remover</button>
        </form>
        
        
        </td>";


            echo "</tr>";
        }


        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }else{
        if(DEBUG) echo "lista vazia";
    }

    ?>

    <section class=" text-center bg-dark">
    <p class="lead text-primary">Valor da montagem: R$<?php   echo $selecionado[0]['preco']; ?></p>
    <p class="lead text-info">Valor dos itens: R$<?php   echo $precoDosItensDaLista ?></p>
        <p class="lead text-success">Preco Final: R$<?php   echo $precoDosItensDaLista + $selecionado[0]['preco']; ?></p>
        <div class="container">
            <button type='submit' name='finalizar' class='btn btn-success btn-lg'>finalizar</button>
        </div>
    </section>
    <br>

    <section class=" text-center bg-light">
        <div class="container">
            <h1 class="display-4">Colocar Utensilios</h1>
        </div>
    </section>


    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço Unidade</th>
                    <th scope="col">Adicionar na lista</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($utensilios as $key => $value) {
                    echo "<td scope='row'><img src='uploads/utensilio/" . $utensilios[$key]['foto'] . "' width=64 height=100%>" . "</td>";
                    echo "<td><strong><em>" . $utensilios[$key]['nome'] . "</em></strong></td>";
                    if (strlen($utensilios[$key]['descricao']) > 54) {
                        echo "<td class='text-muted'><small>" . substr($utensilios[$key]['descricao'], 0, 53);
                        echo "<br>";
                        echo substr($utensilios[$key]['descricao'], 53);
                    } else {
                        echo "<td class='text-muted'><small>" . $utensilios[$key]['descricao'];
                    }
                    echo "</small></td>";
                    echo "<td>R$ " . $utensilios[$key]['preco'] . " por unidade</td>";

                    echo "<td>
                    <form method='post' enctype='multipart/form-data' class='form-inline'>
                    <div class='form-group'>
                    <input style='width: 60px'type='number' min = '1' value =1 name='quantidade' class='form-control form-control-sm'>
                    <input type='hidden' name='id' value='" . $utensilios[$key]['id'] . "'>
                    </div>
                    <button  type='submit' name='submit' class='btn btn-success btn-sm'>+</button>
                    </form></td>";


                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}



</script>