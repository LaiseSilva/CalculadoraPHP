<?php
$valor1 = (float) 0;
$valor2 = (float) 0;
$resultado = (float) 0;


if (isset($_GET['btncalc'])) {

	$valor1 = $_GET['txtn1'];
	$valor2 = $_GET['txtn2'];
	$operacao = $_GET['rdocalc'];

	if($valor1 == "" || $valor2 == ""){
		echo('<p class="msgErro">Preencha todos os campos</p>');
	}else{
		if(!is_numeric($valor1) || !is_numeric($valor2)){
			echo('<p class="msgErro">Para fazer o cálculo é necessário ser números </p>');
		}

		else{
			if ($operacao == 'somar') {
				$resultado = $valor1 + $valor2;
			} else if ($operacao == 'subtrair') {
				$resultado = $valor1 - $valor2;
			} else if($operacao == 'multiplicar'){
				$resultado = $valor1 * $valor2;
			}else{
				$resultado = $valor1 / $valor2;
			}
		}
	}	
}
?>

<html>
<head>
	<title>Calculadora - Simples</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div id="conteudo">
		<div id="titulo">
			Calculadora Simples
		</div>

		<div id="form">
			<form name="frmcalculadora" method="get" action="">
				Valor 1:<input type="text" name="txtn1" value="<?php echo($valor1) ?>"> <br>
				Valor 2:<input type="text" name="txtn2" value="<?php echo ($valor2)?>"> <br>
				<div id="container_opcoes">
					<input type="radio" name="rdocalc" value="somar" checked>Somar <br>
					<input type="radio" name="rdocalc" value="subtrair">Subtrair <br>
					<input type="radio" name="rdocalc" value="multiplicar">Multiplicar <br>
					<input type="radio" name="rdocalc" value="dividir">Dividir <br>

					<input type="submit" name="btncalc" value="Calcular">

				</div>
				<div id="resultado">
					<?php echo ($resultado); ?>
				</div>

			</form>
		</div>

	</div>


</body>

</html>