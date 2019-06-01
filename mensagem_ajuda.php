<?php
	$cabecalho_title="Contato Mirror Fashion";
	include("cabecalho_bootstrap.php");
	$conexao = mysqli_connect("127.0.0.1","root","","wd43");
?>

<?php
		$name=$_POST['txtname'];
		$email=$_POST['txtemail'];
		$phone=$_POST['txtphone'];
		$message=$_POST['txtmessage'];
		$photo=$_POST['txtfile'];
		$cabecalho_title="Contato Mirror Fashion";

		if(empty($name) or empty($email) or empty($phone) or empty($message)){
			echo'
				<div class="row">
					<div class="col-md-8 container mt-5 p-5">
						<div class="d-flex justify-content-center">
							<div class="bg-danger p-2 text-white mb-1">
								<p >Olá <?= $name?> Sua duvida não foi recebida com sucesso, tente novamente.</p>
								<p>Verifique se Preencheu todos os campos.</p>
							</div>
							
						</div>
						<div class="d-flex justify-content-center mb-3">
							<a href="contato.php">
								<button class="btn btn-danger btn-outline-dark text-white">CLICKE AQUI VOLTAR A PAGINA DE AJUDA.</button>
							</a>
						</div>
					</div>
				</div>';
		} else {
			$sql="INSERT INTO help_messages(name,email,phone,message,photo) VALUES ('$name','$email','$phone','$message','$photo')";
			$rs = mysqli_query($conexao, $sql) OR die ("ERRO na inclusão SQL!!!");
			mysqli_close($conexao);

			echo'<div class="container my-auto">
				<div class="d-flex justify-content-center">
					<p>Olá <?= $name?> Sua duvida foi recebida com sucesso, logo entraremos em contato.</p>
				</div>
				<div class="d-flex justify-content-center">
					<a href="index.php">
						<button class="btn btn-success mb-1">CLICKE AQUI PARA RETORNAR A PAGINA PRINCIPAL.</button>
					</a>
					
				</div>
			</div>';
		}

	
?>



<?php
	include("rodape_bootstrap.php")
?>