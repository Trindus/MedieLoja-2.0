<?php
    require('connect.php');
    extract($_POST);
    extract($_FILES);

    $destino = "img/" . md5(time()) . ".jpg";

    @session_start();
    $msg = "";

    if(mysqli_query($con, "INSERT INTO `tb_itens` 
    (`cod`, `nome`, `preco`, `tipo`, `foto`) VALUES 
        ('NULL', '$nome', '$preco', '$tipo', '$destino');")){
        $msg = "<p class=green>Registro Criado com sucesso!</p>";
    }else{
        $msg = "<p class=red>Erro ao gravar registro: ". $con->error . "</p>";
    }
    $_SESSION['msg'] = $msg;

    move_uploaded_file($foto['tmp_name'],$destino);
    header("location:addItem.php");