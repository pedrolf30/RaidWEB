<?php

	$id = $_POST['id'];
	$data = $_POST['data'];
	$tipo = $_POST['tipo'];
	$descricao = $_POST['descricao'];
	$valor = $_POST['valor'];
	$desconto = $_POST['desconto'];
	$total = $_POST['total'];

	/*Conexão*/
	require("conectbd.php");

	/*

	Inserir dados do banco...

	INSERT INTO - primeira parte deve estar igual ao banco.
	(id, data, Endereco, tipo)


	VALUES - segunda parte deve estar de acordo com o arquivo em php.
	('$id', '$data', '$endereco', '$tipo')

	*/

	mysqli_query($link, "UPDATE despesas SET id = '$id', data = '$data', tipo = '$tipo', descricao = '$descricao', valor = '$valor', desconto = '$desconto', total = '$total'  WHERE id = '$id' ");

	mysqli_close();

	header("Location:editadosd.html")

?>
