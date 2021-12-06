<?php
session_start();
if(isset($_COOKIE['name'])){
    echo "Cookie recuperado com valor:".$_COOKIE['name'];
}else{
    echo "sem cookie definido";
}

?>