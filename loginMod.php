<?php
session_start();
include('conexao.php');


$nomeM = $_POST['Mod_nome'];
$senhaM = $_POST['Mod_senha'];


	$loginM = mysqli_query($conexao,"SELECT * FROM MODERADOR WHERE nome_moderador = '$nomeM' AND senha_moderador = '$senhaM'") or die("erro ao selecionar");

      if (mysqli_num_rows($loginM) <= 0){
        echo"<script language='javascript' type='text/javascript'>alert('Sinto muito esse MODERADOR não existe :(');window.location.href='user.php';</script>";
        die();

      }else{

        // pega os dados do banco e coloca na sessao
        $user_info = $loginM -> fetch_assoc();
       

        
        $_SESSION['id_moderador'] = $user_info["id_moderador"];
        $_SESSION['nome_moderador'] = $user_info["nome_moderador"];

       

          echo"<script language='javascript' type='text/javascript'> alert('Bem vindo Senhor ".$_SESSION['nome_moderador']."!'); window.location.href='cadastrarSis.php';</script>";

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