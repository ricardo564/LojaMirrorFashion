<?php
session_start();
$cabecalho_title= $_SESSION['user_name']." - Mirror Fashion";
include("cabecalho_bootstrap.php");
require_once 'conexao_bancophp.php';
//Sessão

?>

<div class="container">
	
	<div class="d-flex justify-content-end mt-2">
		<a class="btn btn-lg btn-outline-primary m-1" href="logout.php"><i class="fas fa-user-edit"></i> Editar Perfil</a>

		<a class="btn btn-lg btn-outline-danger m-1" href="logout.php"><i class="fas fa-user-slash"></i> Deletar Perfil</a>

		<a class="btn btn-lg btn-outline-primary m-1" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
	</div>
	<div>
		<h1>Bem vindo <?php echo $_SESSION['user_name'] ?>.</h1>
		
	</div>
	<div>
		
	</div>
</div>

<?php
include("rodape_bootstrap.php")
?>