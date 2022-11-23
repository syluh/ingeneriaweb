<?php

	include("../dll/conexion.php");

	//extract
	$idPersonal=$_POST['idPersonal'];

	
	
	$sql="delete from personal where id = $idPersonal";


	$resSql=mysqli_query($conexion,$sql);
	if($resSql){
		echo '<script>alert("Sus datos se eliminaron correctamente...");</script>
		';
		echo "<script>location.href='../'</script>";
	}else{
		echo "error";
	}
?>
	