<?php
$cabecalho_title='Login/Cadastro';
include("cabecalho_bootstrap.php")
?>
<head>
	<link rel="stylesheet" href="css/keyframes.css">
</head>

<div class="container mt-5""><!--janela principal inicio-->

	<div class="container text-center col-md-4 col-md-offset-3 mb-5 div_form_loggin_register" ><!--2-->		
		<div id="mirror_form_register" >
			<form  method="POST" action="login_register.php"><!--formulario para cadastro-->
				<label  for="mirror_email_register">Email</label>
				<input class="mb-1 form-control" id="mirror_email_register" type="text" placeholder="TrueImmortalEmail@NovesReinos.cultivo">

				<br>

				<label  for="mirror_password_register">Senha</label>
				<input class="form-control" id="mirror_password_register" type="password" placeholder="Texto Misterioso">

				<br>

				<div class=" d-flex align-items-center justify-content-center">
					<button class="btn btn-primary btn-lg">CADASTRAR</button>		
				</div>						
			</form><!--/formulario para cadastro-->
		</div>
		

	</div><!--janela principal inicio-->




	<?php
	include("rodape_bootstrap.php")
	?>