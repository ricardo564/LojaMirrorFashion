<!DOCTYPE html>
<html>
<head>
<meta	charset="UTF-8">
<title>Checkout	Mirror	Fashion</title>
<meta	name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/checkout.css">
<script type="text/javascript" src="js/total.js"></script>
</head>
<body>
<?php
$clothing_id= $_POST['clothing_id'];
$clothing_name=$_POST['clothing_name'];
$clothing_color=$_POST['cor'];
$clothing_size=$_POST['tamanho'];
$clothing_price= $_POST['clothing_price'];
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerExternalContent">
<span class="navbar-toggler-icon"></span>
</button>
<a href="index.php" class="navbar-brand">Mirror Fashion</a>
<div class="collapse navbar-collapse" id="navbarTogglerExternalContent">
<ul class="navbar-nav">
<li>
<a class="nav-link" href="sobre.php">Sobre</a>
</li>
<li>
<a class="nav-link" href="contato.php">Ajuda</a>
</li>
<li>
<a class="nav-link" href="">Perguntas frequentes</a>
</li>
<li>
<a class="nav-link" href="">Entre em contato</a>
</li>
</ul>	
</div>
</nav>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<h1 class="display-4">Ótima escolha!</h1>
<p class="lead">
Obrigado por comprar na Mirror Fashion!
Preencha seus dados para efetivar a compra.
</p>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-4 col-xl-3">
<div class="card mb-3">
<div class="card-header">
<h2>Sua compra</h2>
</div>
<div class="card-body">
<img class="img-thumbnail mb-3 " src="img/produtos/foto<?= $clothing_id ?>-<?= $clothing_color ?>.png" alt="<?= $clothing_name ?> na cor <?= $clothing_color ?> e id <?= $clothing_id ?>">
<dl>
<dt>Produto</dt>
<dd><?= $clothing_name ?></dd>
<dt>Cor</dt>
<dd><?= $clothing_color ?></dd>
<dt>Tamanho</dt>
<dd><?= $clothing_size ?></dd>
<dt>Preço</dt>
<dd id="clothing_price"><?=$clothing_price?></dd>
</dl>
</div>
</div>
<form action="checkout_confirmed.php" method="POST">
<div class="card mb-3"><!--quantidade javascript-->
<div class="card-body">
<div class="form-group">
<label for="clothing_quantity">Quantidade</label>
<input type="number" id="clothing_quantity" name="clothing_quantity" min="1" max="99" value="1" class="form-control">
</div>
<div class="form-group">
<label for="clothing_total_price">Total</label>
<output id="clothing_total_price" name="clothing_total_price" for="clothing_quantity preco" class="form-control">
R$ <?=$clothing_price?>
</output>

</div>
</div>
</div><!--/quantidade javascript-->
</div>
<div class="col-md-8 col-xl-9">

<div class="row">
<div class="col-lg=6">
<fieldset>
<legend>Dados Pessoais</legend>
<div class="input-group">
<div class="input-group-prepend">
<label for="client_name" class="input-group-text">Nome completo</label>
</div>
<input class="form-control" type="text" name="client_name" id="client_name" placeholder="Nome Sobrenome"  required>
</div>
<div class="form-group">
<label for="client_email">Email</label>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">@</span>
</div>
<input type="email" class="form-control" id="client_email" name="client_email"
placeholder="email@exemplo.com">
</div>
</div>
<div class="input-group mb-3">
<div>
<div class="input-group-prepend">
<label for="client_cpf" class="input-group-text">CPF</label>
</div>
</div>
<input class="form-control" type="text" name="client_cpf" id="client_cpf" placeholder="000.000.000-00" required data-mask="999.999.999-99">
</div>
<div class="form-group custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" name="client_newsletter" id="client_newsletter" value="sim" checked>
<label class="custom-control-label" for="client_newsletter">
Quero receber Newsletter da Mirror Fashion
</label>
</div>
</fieldset>
</div>
<div class="col-lg-6">
<fieldset>
<legend>Cartão de crédito</legend>
<div class="input-group mb-3">
<div class="input-group-prepend">
<label class="input-group-text" for="client_card">
Número - CVV
</label>
</div>
<input class="form-control" type="text" name="client_card" id="client_card" data-mask="9999 9999 9999 - 999">
</div>
<div class="form-group">
<div class="input-group mb-3">
<div class="input-group-prepend">
<label class="input-group-text" for="client_flag">
Bandeira
</label>
</div>
<select class="custom-select" name="client_flag" id="client_flag">
<option disabled selected>Selecione uma opção...</option>
<option value="master card">MasterCard</option>
<option value="visa">VISA</option>
<option value="american express">American Express</option>
</select>
</div>
</div>
<div class="input-group mb-3">
<div class="input-group-prepend ">
<label for="client_card_expiring_date" class="input-group-text">Validade</label>
</div>
<input class="form-control" type="month" name="client_card_expiring_date" id="client_card_expiring_date">
</div>
<button id="botaoEnviar" type="submit" class="btn btn-primary mb-3 btn-lg" onclick="confirmed_purchase();">
<i class="fas fa-shopping-cart"></i>
Confirmar Pedido
</button>

<!--valores ocultos dos detalhes da compra para serem enviados a pagina checkout -->	
<input type="hidden" name="clothing_name2" value="<?= $clothing_name?>">	
<input type="hidden" name="clothing_id2" value="<?= $clothing_id?>">
<input type="hidden" name="clothing_size2" value="<?= $clothing_size?>">
<input type="hidden" name="clothing_color2" value="<?= $clothing_color?>">
<input type="hidden" name="clothing_quantity2" value="<?= $clothing_quantity?>">

<!--/valores ocultos dos detalhes da compra para serem enviados a pagina checkout -->	
</fieldset>	
</div>
</div>
</form>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script	type="text/javascript" src="js/inputmask-plugin.js"></script>
</body>
</html>