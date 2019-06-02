<?php
$cabecalho_title="Contato Mirror Fashion";
include("cabecalho_bootstrap.php");
?>

<div class="container">
	<div class="row d-flex justify-content-center" >
		
		<form class="col-md-8" action="mensagem_ajuda.php" method="POST">

			<div class="form-group">
				<div>
					<label class="form-text">Nome: </label>
				</div>	
				<input class="form-control" type="text" name="txtname">
			</div>

			<div class="form-group">
				<div>
					<label>Email: </label>
				</div>	
				<input class="form-control" type="email" name="txtemail">
			</div>

			<div class="form-group">
				<div>
					<label>Telephone: </label>
				</div>	
				<input class="form-control" type="text" name="txtphone">
			</div>


			<div class="form-group">
				<div>
					<label>Mensagem: </label>
				</div>	
				<textarea class="form-control" type="text" name="txtmessage" rows="5"></textarea>
			</div>

			<div class="form-group">
				<div>
					<label>Foto: </label>
				</div>	
				<input class="btn btn-info form-control p-1" type="file" name="txtfile">
			</div>

			<div class="form-group d-flex justify-content-center">
				<button class="btn btn-lg btn-outline-info" type="submit" onclick="ShowMessage()">Enviar</button>
			</div>

		</form>
		
	</div>
</div>
<br>



		<?php
		include("rodape_bootstrap.php")
		?>