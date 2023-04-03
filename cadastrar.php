<?php 

	 if (session_status() !== PHP_SESSION_ACTIVE) {
      //Definindo o prazo para a cache expirar em 60 minutos.
      session_cache_expire(60);
      session_start();
    }
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

	<body lang="pt-br">


<!--Cabeçalho de navegação-->



		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

			<div class="container">

				
				<a class="navbar-brand h1 px-1 mb-0" href="index.php"><img class="imgLogo" src="img/logo.png"> IrrigAção</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>

				<div class="collapse navbar-collapse text-center mt-3 mt-sm-0 mt-md-0 mt-lg-0 mt-xl-0" id="navbarSite">
					
					<ul class="navbar-nav ml-auto">
						
						<li class="nav-item px-1"> 
							<a class="nav-link" href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
						</li>

						<li class="nav-item px-1">
							<a class="nav-link" href="sobre.php"><i class="fa fa-address-card" aria-hidden="true"></i> Sobre</a>
						</li>

						<li class="nav-item px-1"> 
							<a class="nav-link" href="index.php#Serviços"><i class="fa fa-handshake-o" aria-hidden="true"></i> Serviços</a>
						</li>

						<li class="nav-item dropdown px-1 my-0"> 
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropContato" href="#"><i class="fa fa-envelope-open" aria-hidden="true"></i> Atendimento</a>
							
							<div class="dropdown-menu bg-secondary m-0 px-1" id="Ajustadrop">

								<a class="nav-link mb-0 px-1" target="_blank" href="https://fb.me/IrrigAcaoTT"><i class="fa fa-facebook  px-3" aria-hidden="true"></i>Facebook</a>
								<a class="nav-link mb-0 px-1" target="_blank" href="https://twitter.com/AcaoIrrig"><i class="fab fa-twitter white-text px-3"> </i>Twitter</a>
								<a class="nav-link mb-0 px-1" target="_blank" href="mailto:irrigacao.startup@gmail.com"><i class="fa fa-envelope-o px-3" aria-hidden="true"></i>E-mail</a>
								<a class="nav-link mb-0 px-1" target="_blank" href="#"><i class="fas fa-question px-3"></i>Ajuda</a>
								<a class="nav-link mb-0 px-1" target="_blank" href="#"><i class="fa fa-phone px-3" aria-hidden="true"></i>(69) 9 8108-5056</a>	

							</div>
							
						</li>

					</ul>

					<ul class="navbar-nav ml-auto my-0">

						<li class="nav-item dropdown h2 my-0">
							<a class="nav-link dropdown-toggle py-0" data-toggle="dropdown" id="dropLogin" href="#"> 

							<?php 

								if(isset($_SESSION['email_usuario'])){
								 echo '<img id="foto_usuario" class="rounded-circle" src="data:image/jpeg;base64,'.base64_encode($_SESSION["img_usuario"]).'"/>'; 
								}else{echo '<i class="fa fa-user-circle-o" aria-hidden="true"></i>'; } 

							?>

							</a>
							<div class="dropdown-menu bg-secondary px-1">
								<?php 

								if(isset($_SESSION['email_usuario'])){

									echo'
										<hr class="hr-menu">

										<a class="nav-link mb-0 px-1" href="user.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Plantação</a>

										<hr class="hr-menu">

										<a class="nav-link mb-0 px-1" data-toggle="modal" data-target="#modalSite"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Trocar Conta</a>

										<hr class="hr-menu">

										<a class="nav-link mb-0 px-1" href="sair_sessao.php"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Sair</a>

										<hr class="hr-menu">';
								}else{

									echo'
										<hr class="hr-menu">

										<a class="nav-link mb-0 px-1" data-toggle="modal" data-target="#modalSite" href="#"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Entrar</a>

										<hr class="hr-menu">

										<a class="nav-link mb-0 px-1" href="cadastrar.php"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Cadastrar</a>

										<hr class="hr-menu">';

								}
								?>

							</div>
						</li>

					</ul>

				</div>

			</div>

		</nav>



							<!--------Modal-------->



		<div class="modal fade" id="modalSite" tabindex="-1" role="dialog" >

			<div class="modal-dialog modal-lg" role="document">

				<div class="modal-content">

					<div class="modal-header">
						
						<h5 class="modal-title text-success">Entre na sua conta agora:</h5>
						<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>

					</div>

					<div class="modal-body">
					
						<div class="container">

							<div class="row mb-5 justify-content-center">

								<div class="col-sm-12 col-md-10 col-lg-8">

									<form action="login.php" method="POST">
										
										<div class="form-row">
											
											<div class="form-group col-sm-6">

												<label class="text-success" for="LEmail">E-mail:</label>
												<input type="text" required class="form-control3 col-form-label-lg shadow-inset-tb" name="LEmail" id="inputEmail" placeholder="">

											</div>

											<div class="form-group col-sm-6">
												
												<label class="text-success" for="LSenha">Senha:</label>
												<input type="password" required class="form-control3 col-form-label-lg shadow-inset-tb" name="LSenha" id="inputSenha" placeholder="">

											</div>
											
										</div>

										<div class="form-row">
												
											<div class="form-group col-sm-3">
												<button type="submit" class="btn btn-success  w-100">Entrar</button>
											</div>

											<div class="form-group col-sm-9 pt-2">
												<div class="form-check text-success">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input btn-success"> Desejo me manter logado.
													</label>
												</div>
											</div>

										</div>

									</form>

								</div>

							</div>

						</div>

					</div>

					<div class="modal-footer">
						
						<button onclick="onClick();" class="btn btn-success">Cadastrar</button>

					</div>
					
				</div>

			</div>

		</div>



		                                 <!-- Área de Cadastro -->


		                                 <br><br><br>

		<div class="mx-3 my-5">
	        <div class="container  border rounded-lg border-secondary shadow-drop-2-center p-5">

	        	<p class="h1 text-secondary text-center">Cadastro de Usuário:</p>

				<div class="row mt-5 justify-content-center">

					<div class="col-sm-12 col-md-10 col-lg-8">

						<form method="POST" action="cadastro_user.php" name="f1" enctype="multipart/form-data">
							
							<!--  ~~~~~~~FORMULARIO DA IMAGEM~~~~~~~  -->

							<div class="form-row">
									
								<div class="form-group col-sm-12 text-center">

									<img src="img/user-none.PNG" name="img" id="foto_perfil"class="rounded-circle border-secondary">

									<h3 class="text-secondary">Foto de Perfil</h3>

								</div>

							</div>
				
							<div class="form-row">	

								<div class="form-group col-sm-12 text-center">

									<div class="searchIcon">
										<a id="button1" class="btn btn-success"><i class="fa fa-search " aria-hidden="true"></i> Procurar Imagem</a>
									</div>
									<input type="file" id="inputImg" name="imagem" class="d-none" required onchange="imgPreview();">
								
								</div>	

							</div>

									
									
							<!--  ~~~~~~~FORMULARIO DE TEXTO~~~~~~~  -->



							<br><br><br>
							<div class="form-row">

								<div class="form-group col-sm-6">

									<div class="custom-file">
										<label for="inputNome">Nome: <h11>*</h11></label>
										<input type="text" name="inputNome" onkeypress="espaco();" id="inputNome" required class="form-control" placeholder="Primeiro Nome">
									</div>

								</div>

								<div class="form-group col-sm-6">

									<label for="inputSobrenome">Sobrenome: <h11>*</h11></label>
									<input type="text" name="inputSobrenome" id="inputSobrenome" required class="form-control" placeholder="Sobrenome">
									
								</div>

								</div>

							<div class="form-row">

								<div class="form-group col-sm-6">

									<div class="col-auto px-0">

										<label for="inputEmail">E-mail <h11>*</h11></label>
										<div class="input-group mb-2">

											<div class="input-group-prepend">

								            	<div class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>

								            </div>
										
											<input type="text" name="inputEmail" id="inputEmail" required placeholder="email@email.com"  class="form-control">

										</div>

									</div>

								</div>

								<div class="form-group col-sm-6">

									<div class="col-auto px-0">

										<label for="inputTell">Tell:</label>
										<div class="input-group mb-2">

											<div class="input-group-prepend">

								            	<div class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></div>

								            </div>
										
											<input type="text" required name="inputTell" id="InputTell" placeholder="XX XXXXX-XXXX"  onkeypress="formatarTell('XX XXXXX-XXXX',this);" maxlength="13" class="form-control">

										</div>

									</div>

								</div>

							</div>

								<hr>

							<div class="form-row">
									
								<div class="form-group col-sm-6">
									
									<label for="cpf">CEP: <h11>*</h11></label>
									<input type="search" name="cep" id="cep" required placeholder="00000-000"  onkeypress="formatarCEP('#####-###', this);" minlength="9" maxlength="9" class="form-control">

								</div>

								<div class="col-sm-6">

									<label>⠀<!-- <-- Caracter Invisivel--></label>
							      	<button type="button" class="my-0 d-block btn btn-success" onclick="pesquisacep(cep.value)">Pesquisar</button>

							    </div>

							</div>

							<div class="form-row">

								<div class="form-group mb-2 col-sm-8">

									<label for="inputRua">Rua: <h11>*</h11></label>
									
									<input type="text" id="inputRua" name="inputRua" required  class="form-control inputCadastro" placeholder="">
									

								</div>

								

								<div class="form-group col-sm-2">

									<label for="inputBairro">Bairro: <h11>*</h11></label>
									<input type="text" name="inputBairro" id="inputBairro" required class="form-control inputCadastro" placeholder="">

								</div>

								<div class="form-group col-sm-2">

									<label for="inputNumCasa">Nº: <h11>*</h11></label>
									<input type="text" name="inputNumCasa" id="inputNumCasa" required class="form-control" placeholder="nº-000">

								</div>

							</div>

							<div class="form-row">
								
								<div class="form-group col-sm-6">

									<label for="inputCidade">Cidade: <h11>*</h11></label>
									<input type="text" name="inputCidade" id="inputCidade" required placeholder="" class="form-control inputCadastro">

								</div>

								<div class="form-group col-sm-4">

									<!--label for="inputEstado">Estado: <h11>*</h11></label>
									<input type="text" id="inputEstado" required  placeholder="UF" class="form-control inputCadastro"-->

									<label for="inputEstado">Estado: <h11>*</h11></label>

									<select id="inputEstado" name="inputEstado" required class="form-control inputCadastro">
										<option selected>UF</option>
										<option value="AC">AC</option>
										<option value="AL">AL</option>
										<option value="AM">AM</option>
										<option value="AP">AP</option>
										<option value="BA">BA</option>
										<option value="CE">CE</option>
										<option value="DF">DF</option>
										<option value="ES">ES</option>
										<option value="GO">GO</option>
										<option value="MA">MA</option>
										<option value="MG">MG</option>
										<option value="MS">MS</option>
										<option value="MT">MT</option>
										<option value="PA">PA</option>
										<option value="PB">PB</option>
										<option value="PE">PE</option>
										<option value="PI">PI</option>
										<option value="PR">PR</option>
										<option value="RJ">RJ</option>
										<option value="RN">RN</option>
										<option value="RO">RO</option>
										<option value="RR">RR</option>
										<option value="RS">RS</option>
										<option value="SC">SC</option>
										<option value="SE">SE</option>
										<option value="SP">SP</option>
										<option value="TO">TO</option>
									</select>
								</div>

							</div>

							<div class="form-row">
								
								<div class="form-group col-sm-6">

									<label for="pwd">Senha(mínimo 8  máximo 12 letras): <h11>*</h11></label>
									<input type="password" name="pwd" id="inputSenha2" maxlength="12" minlength="8" required  placeholder="Digite sua senha" pattern="(?=.*\d)(?=.*[a-z]).{8,}" onchange="form.pwd2.pattern = this.value;" title="Tem que ter no mínimo 8 letras e no máximo 12 tendo no mínimo uma letra minuscula de [a-z]" required  class="form-control">
									<br>
									<label for="pwd2">Confirmar Senha: <h11>*</h11></label>
									<input type="password" name="pwd2"  id="inputSenha3" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'As senhas devem ser iguais, digite novamente' : '')" maxlength="12" minlength="8" title="Tem que ter no mínimo 8 letras e no máximo 12 tendo no mínimo uma letra minuscula de [a-z]" required placeholder="Digite novamente sua senha" class="form-control">

								</div>

							</div>

								<br><br>

							<div class="g-recaptcha d-block mx-auto col-sm-6" data-sitekey="6Ldcn7sUAAAAAJgn1Y0hJg3iaCWYKPTcRFVZaImm"></div>

							<div class="form-row">
								
								<div class="form-group col-sm-2">
									<input type="submit" value="Enviar" id="" class="w-100 btn btn-success">

								</div>

								<div class="form-group col-sm-10 pt-2">

									<div class="form-check">	

										<label class="form-check-label text-success">
											<input type="checkbox" class="form-check-input btn-success"> Desejo receber novidades de atualizações no meu e-mail.
										</label>

									</div>

								</div>	

							</div>

						</form>

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
				          <h6 class="mb-0 lead font-weight-bold text-light">Junte-se a nós nas redes sociais!!</h6>
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
						          <i class="fas fa-print mr-3"></i> </p>

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
		</div>


		<!-- Script pra o JS e Jquery -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script type="text/javascript" src="font-awesome/js/fontawesome.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>

	</body>