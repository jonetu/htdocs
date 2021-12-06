<?php
session_start();
#$_SESSION['name'] = "name1";
$_SESSION = array('name'=>'nome');
echo "sessao iniciada com: ".$_SESSION['name'];
?>