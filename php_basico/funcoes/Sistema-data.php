<?php 

date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/y');
echo $data;
echo ' <br/>';
//12h
$data = date('d/m/y h:i:s');
echo $data;
echo ' <br/>';
//24h
$data = date('d/m/y H:i:s');
echo $data;
echo ' <br/>';

//soma de data com time() em segundos
$data = date('d/m/y H:i:s',time()+ 60*60);
echo $data;
echo ' <br/>';
?>

