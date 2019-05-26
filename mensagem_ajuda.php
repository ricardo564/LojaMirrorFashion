<?php
	$nome=$_POST['txtnome'];
	$email=$_POST['txtemail'];
	$fone=$_POST['txtfone'];
	$mensagem=$_POST['txtmensagem'];
	$arquivo=$_POST['txtfile'];
	$cabecalho_title="Contato Mirror Fashion";
	include("cabecalho_bootstrap.php")

	if(empty($nome) or empty($email) or empty($fone) or empty($mensagem)){
		echo'
		<div class="row">
			<div class="col-md-8 container ">
				<div class="d-flex justify-content-center">
					<div class="bg-danger p-2 text-white mb-1">
						<p >Olá <?= $nome?> Sua duvida não foi recebida com sucesso, tente novamente.</p>
						<p>Verifique se Preencheu todos os campos.</p>
					</div>
					
				</div>
				<div class="d-flex justify-content-center mb-3">
					<a href="contato.php">
						<button class="btn btn-danger btn-outline-dark text-white">CLICKE AQUI VOLTAR A PAGINA DE AJUDA.</button>
					</a>
				</div>
			</div>
		</div>
		';
	} else {
		echo'<div class="container my-auto">
			<div class="d-flex justify-content-center">
				<p>Olá <?= $nome?> Sua duvida foi recebida com sucesso, logo entraremos em contato.</p>
			</div>
			<div class="d-flex justify-content-center">
				<a href="index.php">
					<button class="btn btn-success">CLICKE AQUI PARA RETORNAR A PAGINA PRINCIPAL.</button>
				</a>
				
			</div>
		</div>';
	}
?>










<?php
	include("rodape_bootstrap.php")
?>