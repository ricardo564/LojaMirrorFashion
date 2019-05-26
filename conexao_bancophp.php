<?php
	$conexao = mysqli_connect("127.0.0.1","root","","wd43");
	$dados = mysqli_query($conexao,"SELECT * FROM produtos");
	
	$dadosF = mysqli_fetch_all($dados);
	$produtos = mysqli_fetch_array($dados);
?>
