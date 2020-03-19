<?php

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	
	
	
	require("conectbd.php");


	$sqlinsert = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";


	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");


	header('location:cadastrados.html');
?>
