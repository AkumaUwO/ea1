<?php
include "Clases/clases.php";
	if($_POST){
		$Animales = new Animales();
		$Animales->Animal($_POST['TipoAnimal']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Animales</title>
</head>
<body>
	<form action="" method="POST"t>
		
		<label for="Animales">Ingrese un animal(caballo, pato, ave): </label>
		<input type="text" name="TipoAnimal" id="TipoAnimal">
		<input type="submit" value="Enviar">
	</form>
</body>
</html>