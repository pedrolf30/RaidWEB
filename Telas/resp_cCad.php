<?php

	$nome = $_POST['nome'];

	
	require("conectbd.php");

	
    $sqlinsert = "INSERT INTO cidade (nome) VALUES ('$nome')";

	

	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");

	header('location:cadastradosdef.html');

?>