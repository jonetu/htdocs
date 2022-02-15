<!DOCTYPE html>
<html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,minha,home,">
    <meta name="description" content="Uma pagina simples do html">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
    <header>
        <div class="center">
        </div>
    </header>

    <?php
    

    //AUTOLOAD - carregar todas as classes dinamicamente
    $autoload = function($class){
        include($class.'.php');
    };
    spl_autoload_register($autoload);


    //Start do app
    $app = new App();
    $app->execute();
    ?>

</body>

</html>