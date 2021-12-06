<?php
session_start();
$tempo = 60*60;
setcookie('name','nome', time() + 360,'/');
echo "cookie definido com valor: ".$_COOKIE['name']."Tempo de atividade do cookie: ".$tempo." segundos";
?>