<html>
<head>
    <title>Projeto PHP</title>
</head>
<body>
	<?php
		$string = "Curso de PHP";
		$numero = 50;
		$arrays = array("php", "java", "redes", "c/c++");
		date_default_timezone_set('America/Sao_Paulo');
		$data = date("d/m/Y H:i:S");
	?>
    <h4>Essa é uma variavel do tipo string,
		para implementar uma variável do tipo string 
		utiizamos aspas simples ('') ou duplas ("")
		=> 
		<?php 
			echo $string;

		?>
	</h4>
    <h4>Essa é uma variável do tipo números/integers,
		para implementar essa variável utilizamos
		somente os números desta fomra
		=>
		<?php 
			echo $numero;
		?>
	</h4>
	<h4>Essa é uma variavel com array, para implementar
		um array em uma variavel utilizamos desta forma
		=> $array = array("php", "java", "redes", "c/c++")

		<?php
			print_r($arrays)
		?>
	</h4>
	<h4>Vamos implementar uma variavel do tipo
		datas, para implementar a variavel com datas
		utilizamos uma função própria do PHP desta forma
		=> $data = date("d/m/Y H:i:S")

		<?php
			print $data;
		?>
	</h4>
</body>
</html>