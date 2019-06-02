
window.onload = function(){

	/*função para calcular o total*/
	var	$input_quantidade	=	document.querySelector("#clothing_quantity");
	var	$output_total	=	document.querySelector("#clothing_total_price");

	$input_quantidade.oninput	=	function() {

	var	preco	=	document.querySelector("#clothing_price").textContent;
		preco	=	preco.replace("R$ ",	"");
		preco	=	preco.replace(",",	".");
		preco	=	parseFloat(preco);

	var	quantidade	=	$input_quantidade.value;
	var	total	=	quantidade	*	preco;
		total	=	"R$	"	+	total.toFixed(2)
		total	=	total.replace(".",	",");
		$output_total.value	=	total;
}/*/função para calcular o total*/



}
