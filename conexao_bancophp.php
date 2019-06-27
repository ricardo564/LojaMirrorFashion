<?php
	$servername="127.0.0.1";
	$username="root";
	$password="";
	$db_name="wd43";

	$conexao = mysqli_connect($servername,$username,$password,$db_name);
	$dados = mysqli_query($conexao,"SELECT * FROM produtos");
	
	$dadosF = mysqli_fetch_all($dados);
	$produtos = mysqli_fetch_array($dados);

	if(mysqli_connect_error()):
		echo "Falha na conexão: ".mysqli_connect_error();
	endif;
?>
