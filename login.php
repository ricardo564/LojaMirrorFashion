<?php
$cabecalho_title='Login/Cadastro';
include("cabecalho_bootstrap.php")
?>
<head>
	<link rel="stylesheet" href="css/keyframes.css">
</head>

<div class="container mt-5""><!--janela principal inicio-->

	<div class="container text-center col-md-4 col-md-offset-3 mb-5 div_form_loggin_register" ><!--2-->

		<div  id="mirror_form_login"><!--formulario para login-->
			<!--imagem clikavel do espelho inicio-->

			<div id="panda-login" class=" d-flex align-items-center justify-content-center">
				<a href="index.php">
					<img class="w-50" src="img/round_mirror.png" alt="">
				</a>	
			</div><!--imagem clikavel do espelho fim-->
			<form method="POST" action="login_register.php">
				<div class="p-2">
					<label  for="panmail"><i class="fas fa-envelope"> Email</i></label>
					<input class="mb-1 form-control" id="panmail" type="text" placeholder="TrueImmortalEmail@NovesReinos.cultivo">
				</div>
				
				<div class="p-2">
					<label  for="panssword"><i class="fas fa-key"> Senha</i></label>
					<input class="form-control" id="panssword" type="password" placeholder="Texto Misterioso">
				</div>				


				<div class=" d-flex align-items-center justify-content-center">
					<button class="btn btn-primary btn-lg">LOGAR</button>		
				</div>						
			</form><!--/formulario para login-->
		</div>
		


	</div><!--janela principal inicio-->




	<?php
	include("rodape_bootstrap.php")
	?>