<?php
    include('connect.php');
    extract($_POST);
    extract($_FILES);
    
    $destino = "fotos/" . md5(time()) . ".jpg";

    if(mysqli_query($con, "UPDATE `tb_itens` SET
        `nome` = '$nome',
        `preco` = '$preco',
        `tipo` = '$tipo',
        `foto` = '$destino'
        WHERE
        `tb_itens`.`cod` = '$cod';")){
        $msg = "<p class=green>Registro Criado com sucesso!</p>";
    }else{
        $msg = "<p class=red>Erro ao gravar registro: ". $con->error . "</p>";
    }
    @session_start();
    $_SESSION['msg'] = $msg;

    move_uploaded_file($foto['tmp_name'],$destino);
    header("location:alterar.php?cod=$cod");

?>