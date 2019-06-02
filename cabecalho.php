
<!DOCTYPE html>
<html>
<head>
	<!--<!–[if lt IE 9]> 
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]–> -->
	<meta name="viewport" content="width=device-width">
	<title><?php print $cabecalho_title; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="(max-width: 939px)" />
	<!-- Icone no topo da aba da pagina -->
	<link rel="icon" href="img/Mirror.png">
	<script type="text/javascript" src="js/produto.js"></script>
	<?php print @$cabecalho_css; ?>
</head>

<body>

<header class="container">
	<div>
		<h1 class="logotipo">
			<a href="index.php">
				<img src="img/logo.png" alt="Mirror	Fashion">
			</a>

		</h1>
			<div>
				<a class="bandeira" href="index.php">
					<img src="img/BR.png">
				</a>
				<a class="bandeira" href="english/index.php">
					<img src="img/GB.png">
				</a>
			</div>
		<p	class="sacola">Nenhum	item	na	sacola	de	compras</p>
		<br>

	</div>


	<nav class="menu-opcoes">
		<ul>
			<li><a href="login_register.php">LOGAR/CADASTRAR</a></li>
			<li><a href="#">Lista de Desejos</a></li>
			<li><a href="#">Cartão Fidelidade</a></li>
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="contato.php">Ajuda</a></li>
			<br>

		</ul>
	</nav>

</header>