<?php

	$id = $_POST['id'];
	$tipo = $_POST['tipo'];

	/*Conexão*/
	require("conectbd.php");



	mysqli_query($link, "UPDATE tipo_despesa SET id = '$id', tipo = '$tipo' WHERE id = '$id' ");

	mysqli_close();

	header("Location:editadostd.html")

?>
