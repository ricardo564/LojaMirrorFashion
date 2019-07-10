

<div class="container p-1"><!--TUDO-->
	<?php
	$cabecalho_title="Mirror Fashion";
	include("cabecalho_bootstrap.php");
	include("conexao_bancophp.php");
	?>

	<div class="p-1 mb-5 mt-4"><!--	Conteúdo	principal	-->
		<div class="row"><!--CONTAINER DESTAQUES-->

			<!--MENU LATERAL ESQUERDO-->
			<div class="col-md-3">
				<section><!--busca-->
					<form class="form-inline mt-2" action="busca.php" method="GET">
						<div class="form-group">

							<input class="form-control" type="search" id="txtbusca" name="txtbusca">	
							<label for="txtbusca">
								<i class="fas fa-search fa-lg p-2"></i>
							</label>					
						</div>

						
					</form><!--fim da busca-->
				</section>

				<div>
					
				</div>

				<section class="menu-departamentos">
					<h2>Departamentos</h2>
					<nav class="navbar">
						<ul class='navbar-nav '>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Blusas e camisas
								</a>
								<div class="dropdown-menu p-2" aria-labelledby="navbarDropdown">
									<a class='nav-link' href="#">Manga curta</a>
									<div class="dropdown-divider"></div>
									<a class='nav-link ' href="#">Manga comprida</a>
									<div class="dropdown-divider"></div>
									<a class='nav-link' href="#">Camiseta social</a>
									<div class="dropdown-divider"></div>
									<a class='nav-link' href="#">Camiseta casual</a>
								</div>
							</li>

							<li class='nav-item'>
								<a class='nav-link' href="calcas.php">Calças</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href="">Saias</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href="">Vestidos</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href="">Sapatos</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href="">Bolsas e Carteiras</a>
							</li>
							<li class='nav-item'>
								<a class='nav-link' href="">Acessórios</a>
							</li>
							<li class='nav-item'>
								<a class="nav-link" href=todos_os_produtos.php>Todos os Produtos</a>
							</li>
						</ul>
					</nav>
				</section><!-- fim .menu-departamentos-->
			</div>
			<!--MENU LATERAL ESQUERDO-->

			<!--CARROSSEL BANNER-->
			<div class="col-md-9 mt-1" id="Fashion_Carousel">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="img/destaque-home.png" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="img/destaque-home-2.png" alt="Second slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!--/CARROSSEL BANNER-->

		</div><!--FIM CONTAINER DESTAQUES-->

		
		<div class="row mt-5"><!--	os	paineis	de	novidades	e	mais	vendidos	entrarão	aqui	dentro	-->
			<div class="col-md-6 painel novidades border border-right border-white">
				<div class="p-2">
					<h2>Novidades</h2>
				</div>
				<div class="row p-1">

					<?php
					$arr = array( "a"=>"azul", "b"=>"verde", "c"=>"rosa");	 

					foreach($new_products as $p):

						?>

						<div class=" col-md-6 conteudo_novidades_vendidos">
							<div>
								<a class="nav-link text-dark" href="produto.php?id=<?= $p[0]?>">
									<img class='card-img' src='img/produtos/foto<?= $p[0]?>-<?= $arr[array_rand($arr)] ?>.png'>
									
								</div>
								<div class="p-2">
									<div class="d-flex justify-content-center">
										<p><?= $p[1]?></p>
									</div>
								</a>
							</div>

						</div>

						<?php
					endforeach;
					?>

				</div>
				
			</div>



			<div class="col-md-6  painel novidades maisvendidos border border-left border-white"">
				<div class="p-2">
					<h2>Mais vendidos</h2>
				</div>
				<div class="row p-1">

					<?php
					$arr = array( "a"=>"azul", "b"=>"verde", "c"=>"rosa");	 

					foreach($top_sellers as $p):

						?>

						<div class=" col-md-6 conteudo_novidades_vendidos p-1">
							<div>
								<a class="nav-link text-dark" href="produto.php?id=<?= $p[0]?>">
									<img class='card-img' src='img/produtos/foto<?= $p[0]?>-<?= $arr[array_rand($arr)] ?>.png'>
									
								</div>
								<div >
									<div class="d-flex justify-content-center">
										<p><?= $p[1]?></p>
									</div>
								</a>
							</div>

						</div>

						<?php
					endforeach;
					?>

				</div>

			</div>

		</div><!--fim do container destaque-->



	</div><!--TUDO-->

	<div class="p-5 mb-5 ">
	</div>



	<?php /*php para adcionar o rodape.php a pagina*/
	include("rodape_bootstrap.php");
	?>


</body>
</html>