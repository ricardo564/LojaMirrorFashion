<?php
include("conexao_bancophp.php");

$client_name=$_POST['client_name'];
$client_email=$_POST['client_email'];
$client_cpf=$_POST['client_cpf'];
$client_card=$_POST['client_card'];
$client_flag=$_POST['client_flag'];//////
$client_card_expiring_date=$_POST['client_card_expiring_date'];
$sale_date=date("d,m,Y, H:i");
$client_newsletter=$_POST['client_newsletter'];
$clothing_id=$_POST['clothing_id2'];
$clothing_name=$_POST['clothing_name2'];
$clothing_color=$_POST['clothing_color2'];
$clothing_size=$_POST['clothing_size2'];
$clothing_quantity=$_POST['clothing_quantity'];/////////
$clothing_total_price=$_POST['clothing_total_price'];

$sql="
INSERT INTO sales_details(
clothing_sale_code,
client_name,
client_email,
client_cpf,
client_card,
client_flag,
client_card_expiring_date,
sale_date,
client_newsletter,
clothing_id,
clothing_name,
clothing_color,
clothing_size,
clothing_quantity,
clothing_total_price)
VALUES (
clothing_sale_code,
'$client_name',
'$client_email',
'client_cpf',
'$client_card',
'$client_flag',
'$client_card_expiring_date',
'$sale_date',
'client_newsletter',
'$clothing_id',
'clothing_name',
'$clothing_color',
'$clothing_size',
'$clothing_quantity',
'$clothing_quantity')";

$rs=mysqli_query($conexao,$sql) OR die("Compra não completada com sucesso.");
mysqli_close($conexao);

echo"
$client_name
<br>
$client_email
<br>
$client_cpf
<br>
$client_card
<br>
$client_flag
<br>
$client_card_expiring_date
<br>
$sale_date
<br>
$client_newsletter
<br>
$clothing_id
<br>
$clothing_name
<br>
$clothing_color
<br>
$clothing_size
<br>
$clothing_quantity
<br>
$clothing_total_price
"

?>