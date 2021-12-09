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

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
    $sql->execute(array($id_sql));
    echo "Valor excluido...";
}

?>
<!doctype html>
<html>

<head>
    <title>DELETE</title>
</head>

<body>
    <h1>Dados cadastrados:</h1>

    <?php
    echo '<hr>';
    foreach ($info as $key => $value) {
        echo " ID: " . $info[$key]['id'];
        echo " Nome: " . $info[$key]['nome'];
        echo " Email: " . $info[$key]['email'];
        echo " senha: " . $info[$key]['senha'];

        echo '
        <form method="post">
            <input type="hidden" name="id" value=' . $info[$key]['id'] . ' >
            <input type="submit" name="cliente" value="DELETAR" />
        </form>
        
        ';
        echo '<hr>';
    }

    ?>


</body>

</html>