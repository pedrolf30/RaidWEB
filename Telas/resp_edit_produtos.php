<?php

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	

	/*Conexão*/
	require("conectbd.php");

	/*

	Inserir dados do banco...

	INSERT INTO - primeira parte deve estar igual ao banco.
	(id, Nome, Endereco, preco)


	VALUES - segunda parte deve estar de acordo com o arquivo em php.
	('$id', '$nome', '$endereco', '$preco')

	*/

	mysqli_query($link, "UPDATE produtos SET id = '$id', nome = '$nome', preco = '$preco' WHERE id = '$id' ");

	mysqli_close();

	header("Location:editadosp.html")

?>
