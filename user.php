<?php


    if (session_status() !== PHP_SESSION_ACTIVE) {
      //Definindo o prazo para a cache expirar em 60 minutos.
      session_cache_expire(60);
      session_start();
    }

    include('conexao.php');

    if(!isset($_SESSION['id_usuario']))
    {
        
        echo "Nao tem permissao!";
        header("Location:index.php");
    }
   
    //echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['img_usuario']).'"/>';
?>

<!DOCTYPE html>
<html>
	<head>

		<title>IrrigAção | O melhor sistema para micropodutores e hobbistas</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="theme-color" content="#243A51">


		<!-- Bootstrap -->
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">


		<!--CSS e iCO-->

		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/estilo_user.css">

		<link rel="shortcut icon" type="image/x-icon" href="img/Logo.png">

		<!-- CSS do font-awesome -->
		<link rel="stylesheet" type="text/css" href="font-awesome/css/fontawesome.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/all.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/brands.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/brands.min.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/regular.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/solid.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/svg-with-js.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/v4-shims.css">
		<link rel="stylesheet" type="text/css" href="font-awesome/css/fontawesome.min.css">		
		
		

	</head>

	<body lang="pt-br" class="m-0 p-0">



					            <!--Cabeçalho de navegação-->



        <nav class="navbar navbar-expand-lg navbar-scrolled  fixed-top" id="mainNav">

            <div class="container">

                
                <a class="navbar-brand js-scroll-trigger h1 px-1 mb-0" href="index.php"><img class="imgLogo" src="img/logo.png"> IrrigAção</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse text-center mt-3 mt-sm-0 mt-md-0 mt-lg-0 mt-xl-0" id="navbarSite">
                    
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item px-1"> 
                            <a class="nav-link js-scroll-trigger" href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                        </li>

                        <li class="nav-item px-1">
                            <a class="nav-link js-scroll-trigger" href="sobre.php"><i class="fa fa-address-card" aria-hidden="true"></i> Sobre</a>
                        </li>

                        <li class="nav-item px-1"> 
                            <a class="nav-link js-scroll-trigger" href="index.php#Serviços"><i class="fa fa-handshake-o" aria-hidden="true"></i> Serviços</a>
                        </li>

                        <li class="nav-item dropdown px-1 my-0"> 
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropContato" href="#"><i class="fa fa-envelope-open" aria-hidden="true"></i> Atendimento</a>
                            
                            <div class="dropdown-menu bg-secondary m-0 px-1 js-scroll-trigger" id="Ajustadrop">

                                <a class="nav-link mb-0 px-1" target="_blank" href="https://fb.me/IrrigAcaoTT"><i class="fa fa-facebook  px-3" aria-hidden="true"></i>Facebook</a>
                                <a class="nav-link mb-0 px-1" target="_blank" href="https://twitter.com/AcaoIrrig"><i class="fab fa-twitter white-text px-3"> </i>Twitter</a>
                                <a class="nav-link mb-0 px-1" href="mailto:irrigacao.startup@gmail.com"><i class="fa fa-envelope-o px-3" aria-hidden="true"></i>E-mail</a>
                                <a class="nav-link mb-0 px-1" href="#"><i class="fas fa-question px-3"></i>Ajuda</a>
                                <a class="nav-link mb-0 px-1" href="#"><i class="fa fa-phone px-3" aria-hidden="true"></i>(69) 9 8108-5056</a>  

                            </div>
                            
                        </li>

                    </ul>

                    <ul class="navbar-nav ml-auto my-0">

                        <li class="nav-item dropdown h2 my-0">
                            <a class="nav-link dropdown-toggle py-0" data-toggle="dropdown" id="dropLogin"> <?php echo '<img id="foto_usuario" class="rounded-circle" src="data:image/jpeg;base64,'.base64_encode($_SESSION["img_usuario"]).'"/>'; ?></a>
                            <div class="dropdown-menu bg-secondary px-1">

                                <hr class="hr-menu">

                                <a class="nav-link mb-0 px-1" href="index.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Trocar Conta</a>

                                <hr class="hr-menu">

                                <a class="nav-link mb-0 px-1" href="sair_sessao.php"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Sair</a>

                                <hr class="hr-menu">
                            </div>
                        </li>

                    </ul>

                </div>

            </div>

        </nav>



								<!--------Modal-------->



		



		                                 <!-- Área do Usuario -->

       
    <br><br>
<div class="wrapper col-12 p-0 mt-3">
    <!-- Sidebar  -->
    <nav id="sidebar"> 
        
        <div class="sidebar-header text-center arruma42">
            <h2>I</h2><h3>RRIG</h3><h2>A</h2><h3>ÇÃO</h3>
            
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle a">
                    <i class="fas fa-home i"></i>
                    Home
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="user.php" class="a">Cronograma RTOS</a>
                    </li>
                    <li>
                        <a href="#" onclick="onClickCronograma();" class="a d-none">Ajustar Cronograma</a>
                    </li>
                    <li>
                        <a href="#"  class="a d-none">HOME-3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle a">
                    <i class="fas fa-copy i"></i>
                    Pages
                </a>

                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#"  class="a">Page 1</a>
                    </li>
                    <li>
                        <a href="#"  class="a">Page 2</a>
                    </li>
                    <li>
                        <a href="#"  class="a">Page 3</a>
                    </li>
                </ul>

                <!-- Menu de Configurações do Usuario-->

                <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle a">
                    <i class="fas fa-copy i"></i>
                    Opções
                </a>

                <ul class="collapse list-unstyled" id="pageSubmenu2">
                    <li>
                        <a href="#" onclick="onClickSenha();" class="a">Trocar Senha</a>
                    </li>
                    <li>
                        <a href="perfil.php" onclick="" class="a">Meu Perfil</a>
                    </li>
                    <li>
                        <!-- a href="#"  class="a">Page 3</a -->
                    </li>
                </ul>
                <a href="#" onclick="onClickCadastro_Modulo();" data-toggle="collapse" aria-expanded="false" class="a">
                    <i class="fas fa-briefcase i"></i>
                    Cadastro de Módulo
                </a>
            </li>
        </ul>
        
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar2 navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-success">
                    <i class="fas fa-align-left"></i>
                    <span class="pl-1">Alterar Barra</span>
                </button>
            </div>
        </nav>

        <div id="pagnone" class="container-fluid p-0">

            
            
            <?php

            if ($_SESSION['id_modulo'] !== 0) {
                    
                

                if ($_SESSION['estado_modulo'] > 0) {

                    echo "<div class='form-row text-center m-0 my-5'> 

                            <div class='w-100 text-center col-md-9 col-lg-10 col-sm-12 border border-secondary rounded w-50  my-sm-0 bg-dark text-light box-material py-0 mb-sm-3 mb-3 py-md-2 py-lg-0'>

                                    <h1 class='m-0 w-100'>COD MODULO ATIVO: #".$_SESSION['id_Produto']."</h1>

                            </div>

                            <div class='w-100 mx-sm-auto mx-lg-0 col-md-3 col-lg-2 col-sm-3 '>
                                <form class='m-0 py-auto' action='manipularSisD.php' method='POST'>

                                    <input class='btn btn-danger py-lg-3 py-md-5 py-sm-3 w-100' type='submit' value='Desligar'>

                                </form>
                            </div>

                        </div>";

                }else{

                    echo "<div class='form-row text-center m-0 my-5'> 

                            <div class='w-100 text-center col-md-9 col-lg-10 col-sm-12 border border-secondary rounded w-50  my-sm-0 bg-dark text-light box-material py-0 mb-sm-3 mb-3 py-md-2 py-lg-0'>

                                    <h1 class='m-0 w-100'>COD MODULO INATIVO: #".$_SESSION['id_Produto']."</h1>

                            </div>

                            <div class='w-100 mx-sm-auto mx-lg-0 col-md-3 col-lg-2 col-sm-3 '>
                                <form class='m-0 py-auto' action='manipularSisL.php' method='POST'>

                                    <input class='btn btn-warning py-lg-3 py-md-5 py-sm-3 w-100' type='submit' value='Ligar'>

                                </form>
                            </div>

                        </div>";
                }

                $sql = "SELECT S.id_sessao, S.tipo_sessao,  L.sensor_umidade, L.sensor_temperatura, S.estado_sessao, max( id_leitura ) FROM sessao AS S INNER JOIN leitura AS L WHERE S.id_modulo = ".$_SESSION['id_modulo']." AND S.id_sessao = L.id_sessao GROUP BY S.tipo_sessao ORDER BY L.id_leitura";
                $result = mysqli_query($conexao, $sql);

                if ($result){


                  if (mysqli_num_rows($result) > 0) {
                     echo "<table class='table'>
                            <tr>
                            <th>Numero da Sessão</th>
                            <th>Tipo de Plantio</th>
                            <th>% Umid. no Solo</th>
                            <th>Temperatura</th>
                            <th>Status da Sessão</th></tr>";

                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>".$row['id_sessao']."</td>";
                        echo "<td>".utf8_encode($row["tipo_sessao"])."</td>";
                        echo "<td>".utf8_encode($row["sensor_umidade"])."</td>";
                        echo "<td>".utf8_encode($row["sensor_temperatura"])."ºC</td>";
                       
                        if ($row["estado_sessao"] > 0){

                            $estado_sessao = "Ligado";
                            echo "<td>".$estado_sessao."</td><tr>";

                        }else{

                            $estado_sessao = "Desligado";
                            echo "<td>".$estado_sessao."</td><tr>";
                        }
                    }

                  }else{
                    echo "<h1 class='text-center'>0 resultados nenhuma sessão cadastrada</h1>";
                  }
                }else{
                  echo "<h1 class='mx-auto text-center'>Nenhum Modulo Cadastrado: 0 Resultados para Sessão</h1>";
                }
            }else{
                echo "<h1 class='mx-auto text-center'>Nenhum Modulo Cadastrado: 0 Resultados</h1>";
            }
              
            ?>
        </div>
    </div>
</div>




		<!-- Script pra o JS e Jquery -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

        <script type="text/javascript" src="font-awesome/js/fontawesome.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
        <script type="text/javascript" src="js/pag_menu.js"></script>




	</body>

    
 