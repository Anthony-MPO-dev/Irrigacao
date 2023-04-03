<?php

	include('conexao.php');
		
		$horasI = $_POST['inputHorasI'];
		$minutosI = $_POST['inputMinutosI'];
		$horasT = $_POST['inputHorasT'];
		$minutosT = $_POST['inputMinutosT'];
		$validaDias = $_POST['inputDias'];
		$diaI = $_POST['inputDe'];
		$diaT = $_POST['inputAte'];
		$ID_Modulo = $_POST['inputAte'];

		if ($validaDias == 0) {
			$valida0 = true;
			$valida1 = false;
			$valida2 = false;

			$cadastro =  mysqli_query($conexao, "INSERT INTO cronograma (horasI, minutosI, horasT, minutosT, padronizar, umaVez, ajustado, ID_Modulo) VALUES ('$horasI', '$minutosI', '$horasT','$valida0','$valida1','$valida2', '$ID_Modulo');");
		} else if($validaDias == 1){
			$valida0 = false;
			$valida1 = true;
			$valida2 = false;
			$cadastro =  mysqli_query($conexao, "INSERT INTO cronograma (horasI, minutosI, horasT, minutosT, padronizar, umaVez, ajustado, ID_Modulo) VALUES ('$horasI', '$minutosI', '$horasT','$valida0','$valida1','$valida2', '$ID_Modulo');");

		}else if ($validaDias == 2) {

			$valida0 = false;
			$valida1 = false;
			$valida2 = true;
			
			$cadastro =  mysqli_query($conexao, "INSERT INTO cronograma (horasI, minutosI, horasT, minutosT, padronizar, umaVez, ajustado, ID_Modulo) VALUES ('$horasI', '$minutosI', '$horasT','$valida0','$valida1','$valida2', '$diaI', '$diaT', '$ID_Modulo');");
		}

	$conexao->close();
?>