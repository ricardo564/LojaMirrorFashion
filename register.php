<?php
$cabecalho_title='Login/Cadastro';
include("cabecalho_bootstrap.php");
include("conexao_bancophp.php");
?>
<head>
	<link rel="stylesheet" href="css/keyframes.css">
</head>

<div class="container mt-5""><!--janela principal inicio-->

	<div class="container text-center col-md-4 col-md-offset-3 mb-5 div_form_loggin_register" ><!--2-->		
		<div id="mirror_form_register" >
			<form  method="POST" action="register.php"><!--formulario para cadastro-->
				<label  for="mirror_name_register">nome</label>
				<input class="mb-1 form-control" id="mirror_name_register" name="mirror_name_register" type="text" placeholder="Meng Hao">

				<label  for="mirror_email_register">Email</label>
				<input class="mb-1 form-control" id="mirror_email_register" name="mirror_email_register" type="text" placeholder="TrueImmortalEmail@NovesReinos.cultivo">

				<br>

				<label  for="mirror_password_register">Senha</label>
				<input class="form-control" id="mirror_password_register" name="mirror_password_register" type="password" placeholder="123456">

				<br>

				<div class=" d-flex align-items-center justify-content-center">
					<button class="btn btn-primary btn-lg" name="register">CADASTRAR</button>		
				</div>						
			</form><!--/formulario para cadastro-->
		</div>


	</div><!--janela principal inicio-->

	<?php
	$user_register_name = @$_POST['mirror_name_register'];
	$user_register_mail = @$_POST['mirror_email_register'];
	$user_register_password = @$_POST['mirror_password_register'];

	if(!empty($user_register_name)||!empty($user_register_mail)||!empty($user_register_password)){
		$sql_register="INSERT INTO users(user_name,user_mail,user_password) VALUES ('$user_register_name','$user_register_mail','$user_register_password')";

		$rs = mysqli_query($conexao, $sql_register);
		mysqli_close($conexao);
	}


	?>


	<?php
	include("rodape_bootstrap.php")
	?>