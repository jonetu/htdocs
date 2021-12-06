<?php
if(isset($_COOKIE['name'])){
    #definido um valor negativo para o tempo de atividade
    setcookie('name','nome', time()-(60*60*24),'/');
    echo "cookie deletado";
}else{
    echo "sem cookie para deletar";
}

?>