<!doctype html>
<html>

<head>
    <title>myform</title>
</head>

<body>
    <?php
    if (isset($_GET['acao'])) {

        $nome = $_GET['nome'];
        $email = $_GET['email'];

        echo $nome;
        echo $email;
        echo " get metodo";
    }

    if (isset($_POST['acao'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo $nome;
        echo $email;
        echo " post metodo";
    }


    if (isset($_POST['calcular'])) {
        $n1 = $_POST['number1'];
        $n2 = $_POST['number2'];
        if($n1 !=="" && $n2 !==""){

            if($_POST['choice'] == "soma"){
                echo "soma = ";
                echo $n1 + $n2;
            }elseif($_POST['choice'] == "sub"){
                echo "subtracao = ";
                echo $n1 - $n2;
            }
        }
        }
    ?>

    <!-- POST -->
    <form method="post">
        <input type="text" name="nome" placeholder="using method post" />
        <input type="text" name="email" />
        <input type="submit" name="acao" valie="enviar)" />
    </form>

    <!-- GET ON URL -->
    <form>
        <input type="text" name="nome" placeholder="using method get" />
        <input type="text" name="email" />
        <input type="submit" name="acao" valie="enviar" />
    </form>

    <div>
    <br />
        calcular
    </div>
    <form method="post">
        <input type="number" name="number1" />
        <input type="number" name="number2" />
        <select name="choice">
            <option value="soma">Soma</option>
            <option value="sub">Subtracao</option>
        </select>
        <input type="submit" name="calcular" valie="enviar" />
    </form>


</body>

</html>