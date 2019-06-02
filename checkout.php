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
<a class="nav-link" href="">Ajuda</a>
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
<img class="img-thumbnail mb-3 d-none d-sm-block" src="img/produtos/foto<?= $clothing_id ?>-<?= $clothing_color ?>.png" alt="<?= $clothing_name ?> na cor <?= $clothing_color ?> e id <?= $clothing_id ?>">
<dl>
<dt>Produto</dt>
<dd><?= $clothing_name ?></dd>

<dt>Cor</dt>
<dd><?= $clothing_color ?></dd>

<dt>Tamanho</dt>
<dd><?= $clothing_size ?></dd>

<dt>Preçolinha73</dt>
<dd id="preco"><?=$clothing_price?></dd>

</dl>
</div>
</div>

<div class="card mb-3"><!--quantidade javascript-->
<div class="card-body">
<div class="form-group">
<label for="qtd">Quantidade</label>
<input type="number" id="qtd" name="qtd" min="1" max="99" value="1" class="form-control">
</div>
<div class="form-group">
<label for="total">Total</label>
<output id="total" for="qtd preco" class="form-control">
R$ 129,95
</output>
</div>
</div>
</div><!--/quantidade javascript-->

</div>


<div class="col-md-8 col-xl-9">
<form>
<div class="row">
<div class="col-lg=6">
<fieldset>
<legend>Dados Pessoais</legend>
<div class="input-group">
<div class="input-group-prepend">
<label for="nome" class="input-group-text">Nome completo</label>
</div>

<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome Sobrenome"  required>
</div>

<div class="form-group">
<label for="email">Email</label>

<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">@</span>
</div>
<input type="email" class="form-control" id="email" name="email"
placeholder="email@exemplo.com">
</div>

</div>

<div class="input-group mb-3">
<div>
<div class="input-group-prepend">
<label for="cpf" class="input-group-text">CPF</label>
</div>
</div>

<input class="form-control" type="text" name="cpf" id="cpf" placeholder="000.000.000-00" required data-mask="999.999.999-99">
</div>

<div class="form-group custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" name="nome" id="newsletter" value="sim" checked>
<label class="custom-control-label" for="newsletter">
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
<label class="input-group-text" for="numero-cartao">
Número - CVV
</label>
</div>

<input class="form-control" type="text" name="numero-cartao" id="numero-cartao" data-mask="9999 9999 9999 - 999">
</div>

<div class="form-group">
<div class="input-group mb-3">
<div class="input-group-prepend">
<label class="input-group-text" for="bandeira-cartao">
Bandeira
</label>
</div>
<select class="custom-select" id="bandeira-cartao">
<option disabled selected>Selecione uma opção...</option>
<option value="master">MasterCard</option>
<option value="visa">VISA</option>
<option value="amex">American Express</option>
</select>
</div>
</div>

<div class="input-group mb-3">
<div class="input-group-prepend ">
<label for="validade-cartao" class="input-group-text">Validade</label>
</div>

<input class="form-control" type="month" name="validade-cartao" id="validade-cartao">
</div>

<button id="botaoEnviar" type="submit" class="btn btn-primary mb-3 btn-lg">
<i class="fas fa-shopping-cart"></i>
Confirmar Pedido
</button>
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