<?php

	$servername="127.0.0.1";
	$username="root";
	$password="";
	$db_name="wd43";




	$conexao = mysqli_connect($servername,$username,$password,$db_name);
	$dados = mysqli_query($conexao,"SELECT * FROM produtos");
	
	$dadosF = mysqli_fetch_all($dados);
	$produtos = mysqli_fetch_array($dados);


/*PAINEL NOVIDADES e Mais VENDIDOS*/
	/*NOVIDADES*/
	$dadosN = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY data LIMIT 4");
	$new_products= mysqli_fetch_all($dadosN);

	/*/NOVIDADES*/

	/*Mais VENDIDOS*/
	$dadosV = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY vendas DESC LIMIT 4");
	$top_sellers= mysqli_fetch_all($dadosV);

	/*/Mais VENDIDOS*/

/*/PAINEL NOVIDADES  e Mais VENDIDOS*/
	if(mysqli_connect_error()):
		echo "Falha na conexão: ".mysqli_connect_error();
	endif;
?>
