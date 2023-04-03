<?php
	
	include("conexao.php");
	session_start();

	if ($S_SESSION['id_modulo'] = null) {
		echo "Nao tem permissao!";
        header("Location:user.php");
	}

	$cadSis="UPDATE modulo SET estado_modulo = 1 WHERE id_Produto = '".$_SESSION['id_Produto']."' ";
			
		$resultado=mysqli_query($conexao, $cadSis);
        
    	if($resultado){

				echo"<script language='javascript' type='text/javascript'>alert('Modulo ligado com sucesso!');window.location.href='user.php';</script>";

				$_SESSION['estado_modulo'] = 1;

		}else{
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possivel realizar a Operação :C');window.location.href='user.php';</script>";
		}

?>