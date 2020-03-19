<?php

	$cnpj = $_POST['cnpj'];
	$razao = $_POST['razao'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];

	/*Conexão*/
	require("conectbd.php");

	/*

	Inserir dados do banco...

	INSERT INTO - primeira parte deve estar igual ao banco.
	(cnpj, razao, Endereco, Cidade)


	VALUES - segunda parte deve estar de acordo com o arquivo em php.
	('$cnpj', '$razao', '$endereco', '$cidade')

	*/

	mysqli_query($link, "UPDATE fornecedor SET cnpj = '$cnpj', razao = '$razao', cidade = '$cidade', email = '$email', telefone = '$telefone' WHERE cnpj = '$cnpj' ");

	mysqli_close();

	header("Location:editadosfrn.html")

?>
