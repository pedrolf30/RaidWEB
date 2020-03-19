<?php

	$id = $_POST['id'];
	$nome = $_POST['nome'];

	/*Conexão*/
	require("conectbd.php");



	mysqli_query($link, "UPDATE cidade SET id = '$id', nome = '$nome' WHERE id = '$id' ");

	mysqli_close();

	header("Location:editadosc.html")

?>
