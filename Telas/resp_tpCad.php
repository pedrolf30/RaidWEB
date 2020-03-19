<?php

	$forma = $_POST['forma'];

	
	require("conectbd.php");

	
    $sqlinsert = "INSERT INTO forma_pagamento (forma) VALUES ('$forma')";

	

	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");

	header('location:cadastrados.html');

?>