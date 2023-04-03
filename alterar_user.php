<?php
	include('conexao.php');
	session_start();


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
	
	$update =  mysqli_query($conexao, "UPDATE usuario SET nome_usuario = '$nome', sobrenome_usuario = '$sobrenome', email_usuario = '$email', tell_usuario =  '$tell', cep_usuario = '$cep', rua_usuario = '$rua', bairro_usuario = '$bairro', numCasa_usuario = '$numCasa', cidade_usuario = '$cidade', estado_usuario = '$estado', img_usuario =  '$mysqlImg' WHERE id_usuario = '".$_SESSION['id_usuario']."'; ");
	

	/*$conexao->close();*/


	if($update == true)
	{

		echo"<script language='javascript' type='text/javascript'>alert('Envio Feito Com Sucesso!!');window.location.href='index.php';</script>";
  		
	}else{
	
 		echo "<script language='javascript' type='text/javascript'>alert('Falha no Cadastro dos Novos Dados Tente Novamente ');window.location.href='cadastrar.php';</script>";
 		 
 	} 

 
?>