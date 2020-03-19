<?php

	$id = $_POST['id'];
	$forma = $_POST['forma'];

	/*Conexão*/
	require("conectbd.php");



	mysqli_query($link, "UPDATE forma_pagamento SET id = '$id', forma = '$forma' WHERE id = '$id' ");

	mysqli_close();

	header("Location:editadostp.html")

?>
