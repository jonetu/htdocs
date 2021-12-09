<?php

/**
 * OBS: Banco de dados mysql criado na maquina local com informacoes padroes, 
 * nome da base de dados = mybd; 
 * tabela clientes criada com informacoes sobre: id(auto increment), nome varchar, email varchar, senha varchar;
 * 
 * 
 */
$pdo = new PDO('mysql:host=localhost;dbname=mybd', 'root', '');
//Metodo direto --SEM SEGURANCA DE TAGS MALICIOSAS --
// $nome = $_POST['nome'];
//$email = $_POST['email'];
//$senha = $_POST['senha'];
// $sql = $pdo->prepare("INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '".$nome."', '".$email."', '".$senha."')");

if (isset($_POST['cliente'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($nome != '' && $email != '' && $senha != '') {
        $sql = $pdo->prepare("INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`) VALUES (NULL,?,?,?)");
        $sql->execute(array($nome, $email, $senha));
        echo "Enviado para o banco de dados!";
    }
}

?>
<!doctype html>
<html>

<head>
    <title>Enviar dados</title>
</head>

<body>
    <h1>Cadastro no banco de dados</h1>
    <form method="post">
        <input type="text" name="nome" placeholder="nome" />
        <input type="text" name="email" placeholder="email" />
        <input type="password" name="senha" placeholder="senha" />
        <input type="submit" name="cliente" value="enviar!" />
    </form>

</body>

</html>