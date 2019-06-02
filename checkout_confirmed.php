<?php
include("conexao_bancophp.php");

$client_name=$_POST['client_name'];
$client_email=$_POST['client_email'];
$client_cpf=$_POST['client_cpf'];
$client_card=$_POST['client_card'];
$client_flag=$_POST['client_flag'];
$client_card_expiring_date=$_POST['client_card_expiring_date'];
$sale_date=current_date();
$client_newsletter=$_POST['client_newsletter'];
$clothing_id=$_POST['clothing_id'];
$clothing_name=$_POST['clothing_name'];
$clothing_color=$_POST['clothing_color'];
$clothing_size=$_POST['clothing_size'];
$clothing_quantity=$_POST['clothing_quantity'];
$clothing_total_price=$_POST['clothing_total_price2'];

$sql="
INSERT INTO sales_details(clothing_sale_code,client_name,client_email,client_cpf,client_card,client_flag,client_card_expiring_date,sale_date,client_newsletter,clothing_id,clothing_name,clothing_color,clothing_size,clothing_quantity,clothing_total_price)
VALUES (clothing_sale_code,'$client_name','$client_email,client_cpf','$client_card,client_flag','$client_card_expiring_date','$sale_date,client_newsletter','$clothing_id,clothing_name','$clothing_color','$clothing_size','$clothing_quantity','$clothing_total_price')";
$rs=mysqli_query($conexao,$sql) OR die("Compra não completada com sucesso.");
mysqli_close($conexao);



?>