<?php

	$id = $_POST['id'];
	$data = $_POST['data'];
	$horario = $_POST['horario'];
	$cliente = $_POST['cliente'];
	$produtos = $_POST['produtos'];
	$quantidade = $_POST['quantidade'];
	$forma = $_POST['forma'];
	$preco = $_POST['preco'];

	/*Conexão*/
	require("conectbdvendas.php");

	/*

	Inserir dados do banco...

	INSERT INTO - primeira parte deve estar igual ao banco.
	(cnpj, data, Endereco, horario)


	VALUES - segunda parte deve estar de acordo com o arquivo em php.
	('$cnpj', '$data', '$endereco', '$horario')

	*/

	mysqli_query($con, "UPDATE vendas SET id = '$id', data = '$data', horario = '$horario', cliente = '$cliente', produtos = '$produtos',quantidade ,= '$quantidade',forma = '$forma',preco = '$preco' WHERE id = '$id' ");

	mysqli_close();

	header("Location:editados.html")

?>
