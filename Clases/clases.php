<?php

	class Animales{

		function Animal($TipoAnimal){
			if($TipoAnimal == "caballo" or $TipoAnimal == "Caballo"){
				echo "El animal es un caballo, tiene 4 patas, no tiene alas y no vuela.";
			}else if($TipoAnimal == "pato" or $TipoAnimal == "Pato"){
				echo "El animal es un pato, tiene 2 patas, tiene alas y no vuela.";
			}else if($TipoAnimal == "ave" or $TipoAnimal == "Ave"){
				echo "El animal es un ave, tiene 2 patas, tiene alas y vuela.";
			}else{
				echo "Se desconoce el tipo de Animal.";
			}
		}
	}
?>