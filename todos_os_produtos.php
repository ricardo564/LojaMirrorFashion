<?php
	$cabecalho_title="Todos os Produtos- Mirror Fashion";
	include ("cabecalho_bootstrap.php")
?>
	
<?php
	include('conexao_bancophp.php');
?>


<div class="mb-5 p-2">
	<div class='d-flex justify-content-center bg-white mb-5'>
		<div class='container  row mt-2'>
		<?php
			$arr = array( "a"=>"azul", "b"=>"verde", "c"=>"rosa");	 
			foreach($dadosF as $p):

		?>
		
			<div class=" col-md-4 mb-2">
				<div>
					
					<a class="nav-link text-dark" href="produto.php?id=<?= $p[0]?>">
						
						<img class='img-fluid' src='img/produtos/foto<?= $p[0]?>-<?= $arr[array_rand($arr)] ?>.png'>
						<div class="border mt-1 bg-white">
							<div class="d-flex justify-content-center">
								<p class=" mb-1"><?= $p[1]?></p>
							</div>
							
							<div class="d-flex justify-content-center">
							<p ><?= $p[2] ?></p>
							</div>
						</div>
					</a>
				</div>

			</div>

		<?php
			endforeach;
		?>

		</div>
	</div>
</div>

<div class="p-5 mb-5 ">
</div>



<?php
include("rodape_bootstrap.php")
?>