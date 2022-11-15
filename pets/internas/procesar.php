<?php
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$telefono=$_POST['telefono'];
	echo "<strong>".$nombres."</strong> ".$apellidos;
	echo "<hr>";
	echo $telefono;
?>