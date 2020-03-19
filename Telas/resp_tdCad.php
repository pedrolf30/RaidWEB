<?php

	$tipo = $_POST['tipo'];

	
	require("conectbd.php");

	
    $sqlinsert = "INSERT INTO tipo_despesa (tipo) VALUES ('$tipo')";

	

	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");

	header('location:cadastrados.html');

?>