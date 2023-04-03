<?php
	include("conexao.php");
	session_start();

	$numMod=$_POST['idArd'];

	if($numMod == null)
    {
        //buscar se formulario é valido
        echo "Nao tem permissao!";
        header("Location:index.php");
        $conexao->close();
    }

    if ($_SESSION['id_modulo'] !== 0) {
    	
    	echo "<script language='javascript' type='text/javascript'> alert('".$_SESSION['nome_usuario']." Já Possui Modulo Cadastrado!'); window.location.href='user.php';</script>";
        $conexao->close();
    
    }else{



    }

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
			
		$cadSis="INSERT INTO modulo (id_Produto, id_usuario) VALUES ($numMod, ".$_SESSION['id_usuario'].")";	
		$resultado=mysqli_query($conexao, $cadSis);
			
		if($resultado){
				echo"<script language='javascript' type='text/javascript'>alert('Cadastro do Modulo Feito Com Sucesso!!');window.location.href='user.php';</script>";


			//Armazena na sessao os modulos que acabam de ser cadastrados
			$dados2 = mysqli_query($conexao," SELECT * FROM modulo WHERE id_usuario = ".$_SESSION['id_usuario']) or die("erro ao selecionar");
				
			$user_dados = mysqli_fetch_assoc($dados2);

            $_SESSION['id_modulo'] = $user_dados['id_modulo'];
            $_SESSION['id_Produto'] = $user_dados['id_Produto'];
				
		}
				
		else{
				echo"<script language='javascript' type='text/javascript'>alert('Não Foi Possivel Cadastrar o Modulo :,( ');window.location.href='user.php';</script>";
		}
				
		mysqli_close($conexao);
	
	}else{

		mysqli_close($conexao);

		echo"<script language='javascript' type='text/javascript'>alert('ERRO: Responda o recaptcha corretamente! ');window.location.href='user.php';</script>";
		
	}

?>