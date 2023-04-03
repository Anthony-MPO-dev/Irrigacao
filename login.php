<?php
session_start();
include('conexao.php');


$email = $_POST['LEmail'];
$senha = md5($_POST['LSenha']);


	$login = mysqli_query($conexao,"SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'") or die("erro ao selecionar");

      if (mysqli_num_rows($login) <= 0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
        die();

      }else{

        // pega os dados do banco e coloca na sessao
        $user_info = $login -> fetch_assoc();
       

        
        $_SESSION['id_usuario'] = $user_info["id_usuario"];
        $_SESSION['img_usuario'] = $user_info["img_usuario"];
        $_SESSION['nome_usuario'] = $user_info["nome_usuario"];
        $_SESSION['sobrenome_usuario'] = $user_info["sobrenome_usuario"];
        $_SESSION['email_usuario'] = $user_info["email_usuario"];
        $_SESSION['id_moderador'] = null;
        $_SESSION['nome_moderador'] = null;

        // Pega os ids das tabelas modulo
        $dados = mysqli_query($conexao," SELECT * FROM modulo WHERE id_usuario = ".$_SESSION['id_usuario']) or die("erro ao selecionar");

        if ($dados){

          if (mysqli_num_rows($dados) >0) {
          
           $user_dados = mysqli_fetch_assoc($dados);

        

            $_SESSION['id_modulo'] = $user_dados['id_modulo'];
            $_SESSION['id_Produto'] = $user_dados['id_Produto'];
            $_SESSION['estado_modulo'] = $user_dados['estado_modulo'];
           

          }else{

            echo "0 modulos cadastrados";
            $_SESSION['id_modulo'] = 0;
            $_SESSION['id_Produto'] = 0;

          }

        }else{

          echo "ERRO SQL MODULO(login.php linha 30) ";
        
        }

          echo"<script language='javascript' type='text/javascript'> alert('Bem vindo ".$_SESSION['nome_usuario']."!'); window.location.href='user.php';</script>";

      }
      

	$conexao->close();

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