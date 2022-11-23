<?php

	include("../dll/config.php");
	include("../dll/class_mysqli.php");
	$miconexion= new class_mysqli();
	$miconexion -> conectar(DBHOST,DBUSER,DBPASS,DBNAME);
	//extract
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$direccion=$_POST['direccion'];
	$telefono=$_POST['telefono'];
	$fechaN=$_POST['fechaN'];
	$Correo=$_POST['Correo'];
	
	$sql="insert into personal values('','$nombres','$apellidos','$Correo','$telefono','$direccion','$fechaN')";

	//$sql="delete from personal where id = 2";

	//$sql="update personal set nombres ='Víctor',apellidos='Carrión' where id=4";

	$resSql=$miconexion->consulta($sql);

	if ($resSql) {
		echo '<script>alert("Sus datos se regsitraron corretamente..");</script>';
		echo "<script>location.href='../'</script>";
	}else{
		echo "Error..  Problemas de sql";
	}
?>
	
