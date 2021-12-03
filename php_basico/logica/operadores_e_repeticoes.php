<!doctype html>
<html>
  <head>
    <title>test</title>
    <meta charset="utf-8">
  </head>
  
  <body>
    <p>
        <?php 
        $cor_da_div = 'yellow';
        //concatenacao com '\'
        echo "<div style=\"background-color:$cor_da_div\"> conteúdo concatenado</div> ";
        $num1 = 1;
        $num2 = 10;
        $soma = $num1 + $num2;
        $subtracao = $num1 - $num2;
        $divisao = $num1 / $num2;
        $resto = $num1 % $num2;
        
        if($num1 == $num2){
          echo "o numero ".$num1." eh igual ao numero ".$num2;

        }else{
          echo "o numero ".$num1." eh diferente ao numero ".$num2;
        }

        /*Uso do if, else e elseif */
        echo "<br/>";
        $num1 = 1;
        $num2 = "1";
        if($num1 === $num2){
          echo "o numero ".$num1." eh igual em valor e tipo ao numero ".$num2;

        }elseif($num1 == $num2){
          echo "o numero ".$num1." eh igual em valor e nao em tipo ao numero ".$num2;
        }else{
          echo "o numero ".$num1." nao eh igual em valor nem tipo ao numero ".$num2;
        }

        /*Operadores logicos */
        echo "<br/>";
        $num1 = 1;
        $num2 = 10;

        if($num1 < $num2 || $num1 == $num2){
          echo "uma das acertivas esta correta ou as duas estao<br/>";
        }
        if($num1 + 9 >= $num2 && $num1 != $num2){
          echo "As duas acertivas estao corretas<br/>";
        }

        /*Laco de repeticoes */
        for($contador = 0; $contador < 256; $contador+=32){

          echo "<div style=\"background-color:rgb($contador,$contador, 10);font-size:$contador%\"> Laço For</div> ";
          
        }

        $contador = 0;
        while($contador < 256){
          echo "<div style=\"background-color:rgb($contador,10, $contador);font-size:$contador%\"> Laço While</div> ";
          
          $contador+=32;
        }


        
        
        ?>

        

        
    </p>
  </body>
</html>