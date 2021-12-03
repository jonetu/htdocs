<?php 


$string = 'substring';
echo "substring: ".substr($string,0,3).'<br/>';

$string = 'recorte de string';
$array_corte = explode(' ',$string);
print_r($array_corte);
echo "<br/>";

$array_juncao = implode('-', $array_corte);
echo $array_juncao;
echo "<br/>";

$codigohtml = '<p>remover tags.<p/>';
echo strip_tags($codigohtml);
echo "<br/>";

$codigohtml = '<p>nao interpretar tags.<p/>';
echo htmlentities($codigohtml);
echo "<br/>";

$string = 'Maiúsculo e minúsculo';
echo mb_strtolower($string,'UTF-8');
echo "<br/>";
echo mb_strtoupper($string,'UTF-8');
echo "<br/>";

$string = 'Substituir joao';
echo str_replace('joao','maria',$string);
echo "<br/>";

$string = 'primeiro caractere maiúsculo';
echo ucfirst($string);
echo "<br/>";

$string = 'todas as palavas com primeiro caractere maiúsculo';
echo ucwords($string);
echo "<br/>";
?>

