<?php

include("conexion.php");

if(isset($_POST["Cedula"])){

	$Nombre = $_POST["Nombre"];
	$Apellido = $_POST["Apellido"];
	$Cedula = $_POST["Cedula"];
	$Tipo_de_carro = $_POST["Tipo_de_carro"];
	$Origen = $_POST["Origen"];
	$Destino = $_POST["Destino"];


	$sentencia = "insert into usuario(Nombre, Apellido, Cedula, Tipo_de_carro , Origen , Destino ) values ('".$Nombre."', '".$Apellido."','".$Cedula."','".$Tipo_de_carro."','".$Origen."','".$Destino."')";

	if (mysqli_query($conn, $sentencia)){
		echo "Se guardó ".$Nombre;
	} else {
	    echo "Error: " . $sentencia;
	}

	mysqli_close($conn);

}

?>