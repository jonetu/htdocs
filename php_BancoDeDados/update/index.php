<?php

/**
 * OBS: Banco de dados mysql criado na maquina local com informacoes padroes, 
 * nome da base de dados = mybd; 
 * tabela clientes criada com informacoes sobre: id(auto increment), nome varchar, email varchar, senha varchar;
 * 
 * 
 */
$pdo = new PDO('mysql:host=localhost;dbname=mybd', 'root', '');
$sql = $pdo->prepare("SELECT * from clientes");
$sql->execute();
$info = $sql->fetchAll();

if (isset($_POST['cliente'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $id_sql = $_POST['id'];

    if ($nome != '' && $email != '' && $senha != '') {
        $sql = $pdo->prepare("UPDATE `clientes` SET nome=?,email=?,senha=? WHERE id=? ");
        $sql->execute(array($nome, $email, $senha,$id_sql));
        echo "Valor atualizado!";
    }
}

?>
<!doctype html>
<html>

<head>
    <title>UPDATE</title>
</head>

<body>
    <h1>Dados cadastrados:</h1>

    <?php
    echo ' <pre>';
    print_r($info);
    echo ' </pre>';


    echo '<hr>';
    foreach ($info as $key => $value) {
        echo " ID: " . $info[$key]['id'];
        echo " Nome: " . $info[$key]['nome'];
        echo " Email: " . $info[$key]['email'];
        echo " senha: " . $info[$key]['senha'];

        echo '
        <form method="post">
            <input type="hidden" name="id" value='.$info[$key]['id'].' >
            <input type="text" name="nome" placeholder="nome" />
            <input type="text" name="email" placeholder="email" />
            <input type="password" name="senha" placeholder="senha" />
            <input type="submit" name="cliente" value="atualizar" />
        </form>
        
        ';
        echo '<hr>';
    }

    ?>

    
</body>

</html>