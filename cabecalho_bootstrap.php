<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php print $cabecalho_title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap 4 online -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<!-- css_pessoal -->
	<link rel="stylesheet" href="css/css_pessoal.css">

	
	<!-- Icone no topo da aba da pagina -->
	<link rel="icon" href="img/Mirror.png">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



</head>
<body>

	<div class="row">
		<div class='col-md-12'>
			<div class='d-flex justify-content-end'>
				<a class="bandeira" href="index.php">
					<img class='img-thumbnail' src="img/BR.png">
				</a>
				<a class="bandeira" href="english/index.php">
					<img class='img-thumbnail' src="img/GB.png">
				</a>
			</div>
			<div class='d-flex justify-content-end mt-1'>
				<p	class="mr-1">Nenhum	item	na	sacola	de	compras</p>
				<img class='img-fluid' src="img/sacola.png">
			</div>
		</div>
	</div>

	<header>
		<nav  class="navbar navbar-expand-lg">
			<a href="index.php">
				<img class='navbar-brand' src="img/logo.png" alt="Mirror	Fashion">
			</a> 

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_mirror_fashion">
				<i class="fas fa-bars fa-2x"></i>
			</button>

			<div class="collapse navbar-collapse " id="navbar_mirror_fashion">
				<ul class='navbar-nav ml-md-auto '>
					
					<li class='nav-item'>
						<a class='nav-link' href="login.php">
							<u>Logar</u>
						</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href="register.php">
							<u>Cadastrar</u>
						</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href="#">
							<u>Lista de Desejos</u>
						</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href="#">
							<u>Cartão Fidelidade</u>
						</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href="sobre.php">
							<u>Sobre</u>
						</a>
					</li>
					<li class='nav-item'>
						<a class='nav-link' href="contato.php">
							<u>Ajuda</u>
						</a>
					</li>

				</ul>
			</div>
		</nav>

	</header>

</body>
</html>