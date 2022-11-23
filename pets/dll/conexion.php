<?php
$conexion=new mysqli("127.0.0.1","root","","pets");
	if($conexion -> connect_errno){
		echo "Hay problemas de conexion";
} else{
	echo "Si se conecto";
	}

?>		