<?php

/**
 *
 * Calculadora basica
 *
 * @param  $n1, $n2 - primeiro numero,segundo numero
 * @return float $resultado 
 *
 */
class Calculadora
{

    public function somar($n1, $n2)
    {
        return $n1 + $n2;
    }
    public function subtrair($n1, $n2)
    {
        return $n1 - $n2;
    }
    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }
    public function dividir($n1, $n2)
    {

        try {
            return $n1 / $n2;
        } catch (DivisionByZeroError $e) {
            echo ' ERROR!';
            print_r($e);
            return 0;
        }
    }
    public function porcentagem($n1, $n2)
    {
        return $n1 * $n2 / 100;
    }
    public function exponencial($n1, $n2)
    {
        if ($n2 == 0) {
            return 1;
        } elseif ($n2 > 0) {
            $valor = $n1;
            while ($n2 > 1) {
                $n1 *= $valor;
                $n2--;
            }
            return $n1;
        } else {
            $valor = $n1;
            $n2 = -$n2;
            while ($n2 >= 0) {
                $n1 = $n1 / $valor;
                $n2--;
            }
            return $n1;
        }
    }
}


/**
 *
 * Calculos de fatorial, raiz quadrada e modulo
 */
class CalculadoraCientifica extends Calculadora
{


    public function fatorial($n1)
    {
        $valor = 1;
        for ($i = $n1; $i > 1; $i--) {
            $valor *= $i;
        }
        return $valor;
    }

/**
 *
 * Retorna  o valor da raiz quadrada positiva e negativa (conjunto dos numeros imaginarios)
 * 
 */
    public function raizquadrada($n1)
    {
        if($n1 < 0 ){
            return sqrt(-$n1).'i';
        }
        return sqrt($n1);
    }
    public function modulo($n1)
    {
        if ($n1 < 0) {
            $n1 = -$n1;
        }
        return $n1;
    }
}
/**
 *
 * Calculos de seno, cosseno e tangente
 * Utilizando como parametro a medida, um booleano para saber se
 *  o valor esta em radiano ou nao;
 *
 * @param    bool   $radiano Se o valor passado esta em radianos ou nao
 * @return      float $valor em graus ou radiano
 *
 */
class CalculadoraEngenharia extends Calculadora
{

    public function radianoParaGraus($n1)
    {
        return rad2deg($n1);
    }
    public function grausParaRadiano($n1)
    {
        return deg2rad($n1);
    }


    public function seno($n1, $radiano)
    {

        if ($radiano) {
            return sin($n1);
        }
        return sin($this->grausParaRadiano($n1));
    }
    public function cosseno($n1, $radiano)
    {
        if ($radiano) {
            return cos($n1);
        }
        return cos($this->grausParaRadiano($n1));
    }

    public function tangente($n1, $radiano)
    {

        if ($radiano) {
            return tan($n1);
        }
        return tan($this->grausParaRadiano($n1));
    }
}

/**
 *
 * Calculos de area e de vetores
 *
 */
class calculadoraObjetos extends Calculadora
{
    function areaRetangulo($altura, $largura)
    {
        return $largura * $altura;
    }
    function areaTriangulo($altura, $base)
    {
        return $base * $altura / 2;
    }
    function areaCirculo($raio)
    {
        return pi() * $raio * $raio;
    }
    function areaElipse($a, $b)
    {
        return pi() * $a * $b;
    }
    /**
     *
     * Calculo da distancia entre dois pontos
     */
    function distanciaDoisPontos($x1, $y1, $x2, $y2)
    {
        $dx = $x1 - $x2;
        $dy = $y1 - $y2;
        return sqrt($dx ** 2 + $dy ** 2);
    }
}
