<?php
$cabecalho_title='Login/Cadastro';
include("cabecalho_bootstrap.php")
?>
<head>
	<link rel="stylesheet" href="css/keyframes.css">
</head>

<div class="container mt-5""><!--jalena principal inicio-->

	<div class="container text-center col-md-4 col-md-offset-3 mb-5" ><!--2-->

		<div id="panda-login" class=" d-flex align-items-center justify-content-center"><!--imagem clikavel do panda inicio-->		
			<img class="w-50" src="img/Cute_Panda_Cartoon_PNG_Clipart_Image.png" alt="">		
		</div><!--imagem clikavel do panda fim-->	


		<div>
			<label  for="panmail">Email</label>
			<input class="mb-1 form-control" id="panmail" type="text" placeholder="TrueImmortalEmail@NovesReinos.cultivo">
			<br>
			<label  for="panssword">Senha</label>
			<input class="form-control" id="panssword" type="password" placeholder="Texto Misterioso">
			<br>

			<div class=" d-flex align-items-center justify-content-center">
				<button class="btn btn-primary btn-lg">LOGAR</button>		
			</div>						
		</div><!--2 fim-->
	</center>


</div><!--jalena principal inicio-->


<?php
include("rodape_bootstrap.php")
?>