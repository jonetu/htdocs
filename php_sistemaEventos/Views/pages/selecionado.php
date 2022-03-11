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
                    <a class="text-primary" href="#"><?php echo $selecionado[0]['nome']; ?></a>
                </h3>
                <p class="card-text mb-auto"><?php echo $selecionado[0]['descricao']; ?></p>
                <div class="mb-1 text-muted">Preço de base: R$<?php echo $selecionado[0]['preco']; ?></div>
                <a href="home">Escolher outro</a>
            </div>

        </div>
    </div>
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
                    echo "<td scope='row'><img src='uploads/utensilio/" . $utensilios[$key]['foto'] . "' width=64 height=100%>" . "</td>";
                    echo "<td>" . $utensilios[$key]['nome'] . "</td>";
                    if (strlen($utensilios[$key]['descricao']) > 54) {
                        echo "<td>" . substr($utensilios[$key]['descricao'], 0, 53);
                        echo "<br>";
                        echo substr($utensilios[$key]['descricao'], 53);
                        echo "</td>";
                    } else {
                        echo "<td>" . $utensilios[$key]['descricao'] . "</td>";
                    }
                    echo "<td>R$ " . $utensilios[$key]['preco'] . "/unid</td>";

                    echo "<td>
                    <form method='post' enctype='multipart/form-data' class='form-inline'>
                    <div class='form-group'>
                    <input style='width: 60px'type='number' class='form-control form-control-sm' id='quantidade'>
                    </div>
                    <button  type='submit' name='submit' class='btn btn-secondary btn-sm'>+</button>
                    </form></td>";


                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>