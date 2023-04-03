<?php
	include("conexao.php");
	
	$numMod=implode($_GET);

	$consulta="SELECT estado_modulo FROM modulo WHERE id_Produto='$numMod'";
	$estado=$conexao->query($consulta) or die($conexao->error);			
   
	while($dado = $estado->fetch_array()){
		echo $dado["estado_modulo"];	
	}

	mysqli_close($conexao);
?>