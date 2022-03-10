<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1 class="container d-flex justify-content-center">
        Nossos Utensilios

    </h1>

    <?php
    //resgatar as informacoes de todos os carros
    $info = $parameter['utensilios'];
    ?>


    <div class="container">
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
                <div class="table-responsive-sm">

            </tbody>
        </table>
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
            <tr>
                <td scope="row"><img src="https://images.unsplash.com/photo-1589532768434-a92c95dad7cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" 
                width=64 height=100% >
                </td>
                <td>Nome Nome
                </td>
                <td>DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição<br>DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</td>
                <td>R$ 15/unid</td>
            </tr>
            <tr>
                <td scope="row"><img src="https://images.unsplash.com/photo-1589532768434-a92c95dad7cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" 
                width=64 height=100% >
                </td>
                <td>Nome Nome
                </td><td>DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição<br>DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</td>
                <td>R$ 20/unid</td>
            </tr>
            <tr>
                <td scope="row"><img src="https://images.unsplash.com/photo-1589532768434-a92c95dad7cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" 
                width=64 height=100% >
                </td>
                <td>Nome Nome
                </td><td>DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição<br>DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</td>
                <td>R$ 15/unid</td>
            </tr>
            <tr>
                <td scope="row"><img src="https://images.unsplash.com/photo-1589532768434-a92c95dad7cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" 
                width=64 height=100% >
                </td>
                <td>Nome Nome
                </td><td>DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição<br>DescriçãoDescriçãoDescriçãoDescriçãoDescriçãoDescrição</td>
                <td>R$ 15/unid</td>
            </tr>
        </tbody>
    </table>
    </div>
</body>

</html>