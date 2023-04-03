<?php

include('conexao.php');

$senhaAntiga = md5($_POST['pwd']);
$senhaNova = md5($_POST['pwd2']);

$sql = "SELECT senha_usuario FROM usuario WHERE senha_usuario = '$senhaAntiga'";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) { // encontrou
    
    $sql2 = " UPDATE usuario SET senha_usuario = '$senhaNova' WHERE senha_usuario = '$senhaAntiga' ";
    
    $resultado2 = mysqli_query($conexao,$sql2);

    if($resultado2)
    {
        echo "<script language='javascript' type='text/javascript'>alert ('Senha Alterada com Sucesso');window.location.href='user.php';</script>";
    }else
    {
        echo "<script language='javascript' type='text/javascript'>alert('Error: mysqli_error()');window.location.href='user.php';</script>";
    }

} else {
    echo "<script language='javascript' type='text/javascript'>alert('Senha Antiga Inválida');window.location.href='user.php';</script>";
}

mysqli_close($conexao);



?>