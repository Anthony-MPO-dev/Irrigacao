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

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar2 navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" class="btn btn-success">
                    <i class="fas fa-align-left"></i>
                    <a href="user.php" class="pl-1 text-green">Voltar</a>
                </button>
            </div>
        </nav>

        <div id="pagnone" class="container-fluid p-0">

        	<div class="row col">
        		
        		<div class="col-lg-5 col-sm-12">
        		 	<i class="py-0 text-center"> <?php echo '<img id="foto-perfil" class="mx-auto rounded d-block" src="data:image/jpeg;base64,'.base64_encode($_SESSION["img_usuario"]).'"/>'; ?></i>
        		 	<?php

        		 		include('conexao.php');
					
						$dados = mysqli_query($conexao,"SELECT * FROM usuario");

						  $user_info = $dados -> fetch_assoc();

				
						  	$_SESSION['tell'] = $user_info["tell_usuario"];
						  	$_SESSION['cep'] = $user_info["cep_usuario"];
						  	$_SESSION['rua'] = $user_info["rua_usuario"];
						  	$_SESSION['bairro'] = $user_info["bairro_usuario"];
						  	$_SESSION['numCasa'] = $user_info["numCasa_usuario"];
						  	$_SESSION['cidade'] = $user_info["cidade_usuario"];
						  	$_SESSION['estado'] = $user_info["estado_usuario"];
						  	$_SESSION['data_usuario'] = $user_info["data_usuario"];
						  	

					?>
        		 	<div>
        		 		
        		 		<table class="h5 table table-borderless my-5">
						  <tbody>

						    <tr>
						      <th scope="row">Nome:</th>
						      <td><?php echo '<h5> '.$_SESSION["nome_usuario"].' '.$_SESSION["sobrenome_usuario"].' </h5>'?></td>
						    </tr>
						    <tr>
						      <th scope="row">Email:</th>
						      <td><?php echo '<h5> '.$_SESSION["email_usuario"].' </h5>'?></td>
						    </tr>
						    <tr>
						      <th scope="row">Tell:</th>
						      <td><?php echo '<h5> '.$_SESSION["tell"].' </h5>'?></td>
						    </tr>
						   
						  </tbody>
						</table>

        		 	</div>

        		</div>

        		<div class="col-lg-7 col-sm-12 my-0">
        			<table class="h5 table table-borderless my-0">
						  <tbody>

						    <tr>
						      <th scope="row">CEP:</th>
						      <td><?php echo '<h5> '.$_SESSION["cep"].' </h5>'?></td>
						    </tr>
						    <tr>
						      <th scope="row">Rua:</th>
						      <td><?php echo '<h5> '.$_SESSION["rua"].' </h5>'?></td>
						    </tr>
						    <tr>
						      <th scope="row">Bairro:</th>
						      <td><?php echo '<h5> '.$_SESSION["bairro"].' </h5>'?></td>
						    </tr>
						     <tr>
						      <th scope="row">Nº d'Casa:</th>
						      <td><?php echo '<h5> '.$_SESSION["numCasa"].' </h5>'?></td>
						    </tr>
						     <tr>
						      <th scope="row">Cidade:</th>
						      <td><?php echo '<h5> '.$_SESSION["cidade"].' </h5>'?></td>
						    </tr>
						     <tr>
						      <th scope="row">UF:</th>
						      <td><?php echo '<h5> '.$_SESSION["estado"].' </h5>'?></td>
						    </tr>
							 <tr>
						      <th scope="row">Data de Cadastro:</th>
						      <td><?php echo '<h5> '.$_SESSION["data_usuario"].' </h5>'?></td>
						    </tr>
						   
						  </tbody>
						</table>

						<a href="alterar_dados.php"><button class="mx-auto btn btn-success p-1 my-5" id="big-botao">Alterar Dados</button></a>
        		</div>

        	</div>

        </div>
            
    </div>


<!--Rodapé da Página-->




<div class="w-100 bg-primary mt-5">
    <footer class="page-footer font-small blue-grey lighten-5">

        <div class="bg-secondary box-material">
            <div class="container">

              <!-- Grid row-->
              <div class="row py-4 d-flex align-items-center ">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                  <h6 class="mb-0 lead font-weight-bold text-light text" data-text="Junte-se a nós nas redes sociais!!">Junte-se a nós nas redes sociais!!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right text-light">

                  <!-- Facebook -->
                  <a class="fb-ic text-light" target="_blank" href="https://fb.me/IrrigAcaoTT">
                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                  </a>
                  <!-- Twitter -->
                  <a class="tw-ic text-light" target="_blank" href="https://twitter.com/AcaoIrrig">
                    <i class="fab fa-twitter white-text mr-4"> </i>
                  </a>
                  <!-- Google +-->
                  <a class="gplus-ic text-light">
                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                  </a>
                  <!--Instagram-->
                  <a class="ins-ic text-light">
                    <i class="fab fa-instagram white-text"> </i>
                  </a>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row-->

            </div>
        </div>

        <!-- Footer Links -->
        <div>
            <div class="container text-light text-center text-md-left bg-primary">

                <!-- Grid row -->
                <div class="row mt-3 dark-grey-text">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">IrrigAção</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p class="lead">Somos Uma empresa que trabalha com a facilidade de acesso a irrigação que solucionara seus problemas com controle e manejo de sua prodição a distância.</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Modulos</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                          <a class="text-light" target="_blank" href="#!">MDBootstrap</a>
                        </p>
                        <p>
                          <a class="text-light" target="_blank" href="#!">MDWordPress</a>
                        </p>
                        <p>
                          <a class="text-light" target="_blank" href="#!">BrandFlow</a>
                        </p>
                        <p>
                          <a class="text-light" target="_blank" href="#!">Bootstrap Angular</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Links Uteis</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                          <a class="text-light" target="_blank" href="#!"></a>
                        </p>
                        <p>
                          <abbr title="A Agência Nacional de Águas (ANA) é uma autarquia federal, vinculada ao Ministério do Desenvolvimento Regional, e responsável pela implementação da gestão dos recursos hídricos brasileiros." class="initialism"><a class="text-light" target="_blank" href="https://www.ana.gov.br/usos-da-agua/irrigacao">Agência Nacional de Águas</a></abbr>
                        </p>
                        <p>
                          <a class="text-light" href="#!"></a>
                        </p>
                        <p>
                          <a class="text-light" href="#!">Ajuda!</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Contatos</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                          <i class="fas fa-home mr-3"></i> IFRO - Câmpus Cacoal - BR-364 - Zona Rural, Cacoal - RO.</p>
                        <p>
                          <i class="fas fa-envelope mr-3"></i><a href="mailto:irrigacao.startup@gmail.com" class="text-light"> irrigacao.startup@gmail.com</a></p>
                        <p>
                          <i class="fas fa-phone mr-3"></i> + 55 (69) 9 8108-5056</p>
                        <p>
                          <i class="fas fa-print mr-3"></i></p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center text-white-50 py-3">© 2019 Copyright:
            <a class="text-white-50" href="https://www.ifro.edu.br/"> IFRO</a>
        </div>
        <!-- Copyright -->

    </footer>

<!-- Footer --> 


		<!-- Script pra o JS e Jquery -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

        <script type="text/javascript" src="font-awesome/js/fontawesome.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
        <script type="text/javascript" src="js/pag_menu.js"></script>




	</body>

    
 