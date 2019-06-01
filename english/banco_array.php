
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Padrão</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<!-- Bootstrap 4 online -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

 	<!-- Icone no topo da aba da pagina -->
	<link rel="icon" href="img/nastari-editores-logo-rodape.png">

 	<!-- Css Pessoal -->
	

	  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<?php
		$conexao = mysqli_connect("127.0.0.1","root","","wd43");
		$dados = mysqli_query($conexao,"SELECT * FROM produtos");
		$dadosF = mysqli_fetch_all($dados);
	?>
	
	<div class="container">
		<div class="row border">
			<?php 
		// echo "<pre>";
		// die(var_dump($dadosF));
		foreach($dadosF as $p) :
?>
	
			<div class="col-md-6">
				<a	href="produto.php?id=<?= urlencode($p[0]) ?>">
					<figure>
						<img class="img-fluid" src="img/produtos/foto<?= $p[0]?>-verde.png" alt="Produto na cor verde">		
						<figcaption><?= $p[1]?>	por	R$	<?= $p[2]?></figcaption>
						<p><?= $p[3]?></p>
					</figure>
				</a>

			</div>

		
			<!--<h3>ID: <?= $p[0] ?></h3>
			<p>nome: <?= $p[1] ?></p>
			<p>preço: <?= $p[2] ?></p>
			<h3>Desc: <?= $p[3] ?></h3>-->
<?php
		endforeach;

		?>
	</div>
	</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>