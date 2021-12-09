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
        echo "select dos dados";

?>
<!doctype html>
<html>

<head>
    <title>SELECT</title>
</head>

<body>
    <h1>Dados cadastrados:</h1>
    <pre>
        <?php
        #print_r($info);

        echo '<hr>';
        foreach($info as $key => $value){
            echo " ID: ".$info[$key]['id'];
            echo '<br/>';
            echo " Nome: ".$info[$key]['nome'];
            echo '<br/>';
            echo " Email: ".$info[$key]['email'];
            echo '<br/>';
            echo " senha: ".$info[$key]['senha'];
            echo '<br/>';
            echo '<hr>';
        }

        ?>
    </pre>
</body>

</html>