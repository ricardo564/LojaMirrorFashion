
<?php
$cabecalho_title="Mirror Fashion";
$cabecalho_css='<link rel="stylesheet" type="text/css" href="css/estilos.css">';
include("cabecalho.php");


?>

<script type="text/javascript" src="js/home.js"></script>
<link	href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet'>
<div class="container destaque">
	<!--	Conteúdo	principal	-->
	<section>
		<h2>Busca</h2>
		<form action="busca.php" method="GET">
			<input type="search" name="txtbusca">
			<input type="image" src="img/busca.png" >
		</form>		<!--fim da busca-->
	</section>

	<section class="menu-departamentos">
		<h2>Departamentos</h2>
		<nav>
			<ul>
				<li><a href="">Blusas e camisas</a>
					<ul>
						<li>
							<a href="#">Manga curta</a>
							<a href="#">Manga comprida</a>
							<a href="#">Camiseta social</a>
							<a href="#">Camiseta casual</a>
						</li>
					</ul>
				</li>

				<li><a href="">Calças</a></li>
				<li><a href="">Saias</a></li>
				<li><a href="">Vestidos</a></li>
				<li><a href="">Sapatos</a></li>
				<li><a href="">Bolsas e Carteiras</a></li>
				<li><a href="">Acessórios</a></li>
			</ul>
		</nav>
		<br>
		<h2><a href=todos_os_produtos.php>Todos os Produtos</a></h2>
	</section><!-- fim .menu-departamentos-->
	<div class="banner-destaque">
		<a href="#" class="pause"></a>
		<img	src="img/destaque-home.png" alt="Promoção:	Big	City	Night">
	</div>
	
</div><!--fim do container destaque-->

<div	class="container paineis"><!--	os	paineis	de	novidades	e	mais	vendidos	entrarão	aqui	dentro	-->
	<section class="painel novidades">
		<h2>Novidades</h2>
		<ol>
			<li>
				<a	href="produto.php?id=1">
					<figure>
						<img	src="img/produtos/miniatura1.png">
						<figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=2">
					<figure>
						<img	src="img/produtos/miniatura2.png">
						<figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=3">
					<figure>
						<img	src="img/produtos/miniatura3.png"><figcaption>
							Fuzz Cardigan	por	R$	129,90
						</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=4">
					<figure>
						<img	src="img/produtos/miniatura4.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=5">
					<figure>
						<img	src="img/produtos/miniatura5.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=6">
					<figure>
						<img	src="img/produtos/miniatura6.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php?id=7">
					<figure>
						<img	src="img/produtos/miniatura7.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=8">
					<figure>
						<img	src="img/produtos/miniatura8.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=9">
					<figure>
						<img	src="img/produtos/miniatura9.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=10">
					<figure>
						<img	src="img/produtos/miniatura10.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php?id=11">
					<figure>
						<img	src="img/produtos/miniatura11.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>

			<li>
				<a	href="produto.php?id=12">
					<figure>
						<img	src="img/produtos/miniatura12.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
		</ol>

		<button id="btexto1" type="button" onclick="trocaTexto2('btexto1');">Mostrar Mais</button>

		
	</section>

	<section class="painel mais-vendidos">
		<h2>Mais vendidos</h2>
		<ol>
			<li>
				<a	href="produto.php?id=7">
					<figure>
						<img	src="img/produtos/miniatura7.png"><figcaption>Camiseta Gwol	por	R$ 125,00</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php?id=8">
					<figure>
						<img	src="img/produtos/miniatura8.png"><figcaption>Camiseta Tiup	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura9.png"><figcaption>Camisa Squares	por	R$ 199,00</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php?id=10">
					<figure>
						<img	src="img/produtos/miniatura10.png"><figcaption>Top in Slub por	R$ 118,00</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura12.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura11.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura7.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura8.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura9.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura10.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura12.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
			<li>
				<a	href="produto.php">
					<figure>
						<img	src="img/produtos/miniatura11.png"><figcaption>Fuzz Cardigan	por	R$	129,90</figcaption>
					</figure>
				</a>
			</li>
		</ol>
		<button  type="button" id="btexto2" onClick="trocaTexto('btexto2');">Mostrar Mais</button>
	</section>

</div>

<?php /*php para adcionar o rodape.php a pagina*/
include("rodape.php");
?>
</body>
</html>