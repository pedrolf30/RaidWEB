<?php

	$data = $_POST['data'];
	$tipo = $_POST['tipo'];
	$descricao = $_POST['descricao'];
	$valor = $_POST['valor'];
	$desconto = $_POST['desconto'];
	$total = $_POST['total'];
	
	
	require("conectbd.php");


	$sqlinsert = "INSERT INTO despesas (data, tipo, descricao, valor, desconto, total) VALUES ('$data', '$tipo', '$descricao', '$valor', '$desconto', '$total')";


	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");


header('location:cadastrados.html');

?>
