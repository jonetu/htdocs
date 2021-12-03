<!doctype html>
<html>

<head>
  <title>variaveis</title>
  <meta charset="utf-8">
</head>

<body>
  <p>
    <?php

    $meu_array = array('name_1', 'name_2', 'name_3', 'name_4');
    $meu_array2 = ['key_1' => 'name1', 'name2', 'name3'];
    $meu_array3[0] = 'name-0';
    $meu_array3[100] = 'name-100';

    $dicionario['nome'] = 'João';
    $dicionario['idade'] = 20;
    $dicionario['país'] = 'Brasil';

    foreach ($meu_array as $x => $y) {
      echo $x;
      echo " -> ";
      echo $y;
      echo "<br/>";
    }
    $size = count($meu_array);
    echo " quantidade : " . $size . "<br/><hr>";


    foreach ($meu_array2 as $x => $y) {
      echo $x;
      echo " -> ";
      echo $y;
      echo "<br/>";
    }
    echo " quantidade : " . count($meu_array2) . "<br/><hr>";

    foreach ($meu_array3 as $x => $y) {
      echo $x;
      echo " -> ";
      echo $y;
      echo "<br/>";
    }
    echo " quantidade : " . count($meu_array3) . "<br/><hr>";

    for ($i = 0; $i < count($meu_array); $i++) {
      echo "Laço For :";
      echo $meu_array[$i];
      echo "<br/>";
    }

    echo "<hr>";
    $idades = array(20, 25, 30);
    $nomes = array('joao', 'maria', 'jose');
    $conjunto = array($nomes, $idades);

    echo "tabela de nomes e idades<br/>";
    foreach ($conjunto as $key => $value) {
      foreach ($value as $x => $y) {

        echo " " . $conjunto[$key][$x] . ", ";

        echo " ";
      }

      echo "<br/>";
    }


    ?>

  </p>
</body>

</html>