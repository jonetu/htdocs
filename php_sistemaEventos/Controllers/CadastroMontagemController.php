<?php

namespace Controllers;

class CadastroMontagemController extends Controller
{

    public function __construct()
    {
        $this->view = new \Views\View('CadastroMontagem');
    }

    public function execute()
    {
        if (isset($_POST["submit"])) {
            $target_dir = "uploads/";
            $file = $_FILES['file'];
            $fileName = $file['name'];
            $fileTmpName = $file['tmp_name'];
            //extensao
            $fileExt = strtolower(explode('.', $fileName)[1]);
            //$target_file = $target_dir . basename($_FILES["file"]['name']);
            $uploadOk = true;
            print_r($_FILES["file"]);
            echo "<br>BASENAME=" . basename($fileName);
            echo "<br>TMPNAME=" . basename($fileTmpName);
            echo "<br>FILE EXT=" . basename($fileExt);

            $allowedFileExt = array('jpg', 'png', 'jpeg', 'webp', 'bmp');


            //Se eh um formato de arquivo permitido
            //Se Nao tiver erro no envio
            //Se nao for muito grande
            if (!in_array($fileExt, $allowedFileExt)) $uploadOk = false;
            if ($file['error']) $uploadOk = false;
            if ($file['size'] > 50000000)  $uploadOk = false;

            if ($uploadOk) {
                $fileNewName = uniqid('', true) . "." . $fileExt;
                echo "<hr>fileID = " . $fileNewName;
                $UploadDir = 'uploads/' . $fileNewName;
                if (move_uploaded_file($fileTmpName, $UploadDir)) {
                    echo "The file " . basename($_FILES["file"]['name']) . " has been uploaded.";

                    $nome = $_POST['nome'];
                    $tema = $_POST['tema'];
                    $descricao = $_POST['descricao'];
                    $preco = $_POST['preco'];
                    $foto = $fileNewName;
                    \Models\MontagemModel::cadastrar($nome, $tema, $descricao, $foto, $preco);
                }
            } else {
                echo "<hr>Imagem nao aceita - VERIFIQUE O TIPO DO ARQUIVO ACEITO 'jpg','png','jpeg','webp','bmp' E TAMANHO DE ATE 50MB<hr>";
            }
        }





        $this->view->render(array('titulo' => 'CadastroMontagem'));
    }
}
