<?php
	include("conexao.php");

    $arrayGet=$_GET;
    $numMod=$arrayGet["numMod"];
    $umiMod=$arrayGet["umiMod"];
    $tempMod=$arrayGet["tempMod"];


	$cadSis="UPDATE sessao SET 
    umidade='$umiMod',
    temperatura='$tempMod'
    WHERE idProd='$numMod'";
    $resultado=mysqli_query($conexao, $cadSis);
 
	mysqli_close($conexao);
?>