<!doctype html>
<html>
  <head>
    <title>variaveis</title>
    <meta charset="utf-8">
  </head>
  
  <body>
    <p>
        <?php 
        $variavel = "olá mundo";
        echo $variavel;
        echo '<br/>';
        $name = "João";
        echo 'Olá '.$name.', bem vindo.';

        $inteiro = 10;
        $booleano = true;
        $float = 10.5234324;

        define('CONSTANTE','<br/>nunca altera <br/>');
        echo CONSTANTE;
        
        $meu_array = array('name1','name2','name3');
        $meu_array2 = ['name1','name2','name3'];

        $dicionario['nome'] = 'João';
        $dicionario['idade'] = 20;
        $dicionario['país'] = 'Brasil';

        echo $dicionario['nome'].', '.$dicionario['idade'].' anos.';

        $cor_da_div = 'yellow';
        //concatenacao com '\'
        echo "<div style=\"background-color:$cor_da_div\"> conteúdo concatenado</div> ";

        ?>

    </p>
  </body>
</html>