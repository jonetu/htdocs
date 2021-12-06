<?php
session_start();
if(isset($_SESSION['name'])){
    echo "Sessao recuperada com valor:".$_SESSION['name'];
}else{
    echo "sem sessao definida";
}

?>