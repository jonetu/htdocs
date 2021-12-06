<?php
session_start();
if(isset($_SESSION['name'])){
    session_destroy();
    echo "sessao desfeita";
}else{
    echo "sem sessao para desfazer";
}

?>