<?php
	include("conexao.php");

	$numMod=$_POST['idArd'];

	$reCa=curl_init();
	curl_setopt($reCa, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($reCa, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($reCa, CURLOPT_SSL_VERIFYPEER, 0);

	curl_setopt($reCa, CURLOPT_POSTFIELDS, http_build_query(array(
		"secret"=>"6Ldcn7sUAAAAABctNXaQ4-CyuTMsEGn9_bzxyFjs",
		"response"=>$_POST["g-recaptcha-response"],
		"remoteip"=>$_SERVER["REMOTE_ADDR"]
	)));

	curl_setopt($reCa, CURLOPT_RETURNTRANSFER, true);
	$recaptcha = json_decode(curl_exec($reCa), true);
	curl_close($reCa);

	if ($recaptcha["success"] === true){
			
		$cadSis="INSERT INTO sistema (idProd) VALUES ($numMod)";	
		$resultado=mysqli_query($conexao, $cadSis);
			
		if($resultado){
				echo "Sistema cadastrado com sucesso";
		}
				
		else{
				echo "Não foi possível cadastrar";
		}
				
		mysqli_close($conexao);
	
		echo "<br><a href='cadastrarSis.php'>Cadastrar sistema</a> 
		<br><a href='manipular.html'>Manipular sistema</a>";  
	}

?>