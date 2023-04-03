<?php
	include('conexao.php');
	session_start();
	
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

	$nome = $_POST['inputNome'];
	$sobrenome = $_POST['inputSobrenome'];
	$email = $_POST['inputEmail'];
	$tell = $_POST['inputTell'];
	$cep = $_POST['cep'];
	$rua = $_POST['inputRua'];
	$bairro = $_POST['inputBairro'];
	$numCasa = $_POST['inputNumCasa'];
	$cidade = $_POST['inputCidade'];
	$estado = $_POST['inputEstado'];
	$senha = md5($_POST['pwd']);
	$imagem = $_FILES['imagem'];

	if($nome == null)
    {
        //buscar se formulario é valido
        echo "Nao tem permissao!";
        header("Location:index.php");
        $conexao->close();
    }

	date_default_timezone_set('America/Sao_Paulo');

	$data = date('l jS \of F Y h:i:s A');

	if($imagem != NULL) { 
		$nomeFinal = time().'.jpg';
		if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
			$tamanhoImg = filesize($nomeFinal); 
			$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
		}
	} 
	else { 
		echo "Você não realizou o upload de forma satisfatória."; 
	} 
	
	$cadastro =  mysqli_query($conexao, "INSERT INTO usuario (nome_usuario, sobrenome_usuario, email_usuario, tell_usuario, cep_usuario, rua_usuario, bairro_usuario, numCasa_usuario, cidade_usuario, estado_usuario, senha_usuario, data_usuario, img_usuario) VALUES ('$nome', '$sobrenome','$email', '$tell', '$cep', '$rua', '$bairro', '$numCasa', '$cidade', '$estado', '$senha', '$data', '$mysqlImg');");
	

	/*$conexao->close();*/


	if($cadastro == true)
	{

		echo"<script language='javascript' type='text/javascript'>alert('Cadastro Feito Com Sucesso!!');window.location.href='index.php';</script>";
  		
	}else{
	
 		echo "<script language='javascript' type='text/javascript'>alert('Falha no Cadastro Tente Novamente ');window.location.href='cadastrar.php';</script>";
 		 
 	}
} else{

	mysqli_close($conexao);

	echo"<script language='javascript' type='text/javascript'>alert('ERRO: Responda o recaptcha corretamente! ');window.location.href='cadastrar.php';</script>";
}

 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title></title>
</head>
<body>
	<center><h1>Carregando</h1></center>
	<center><div class="lds-ring"><div></div><div></div><div></div><div></div></div></center>

</body>
</html>