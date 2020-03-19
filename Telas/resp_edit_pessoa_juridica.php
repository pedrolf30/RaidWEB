<?php

	$cnpj = $_POST['cnpj'];
	$razao = $_POST['razao'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$rua = $_POST['rua'];
	$cep = $_POST['cep'];
	$numero = $_POST['numero'];
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

	mysqli_query($link, "UPDATE pessoa_jurid SET cnpj = '$cnpj', razao = '$razao', cidade = '$cidade', bairro = '$bairro', rua = '$rua', cep = '$cep', numero = '$numero',telefone = '$telefone' WHERE cnpj = '$cnpj' ");

	mysqli_close();

	header("Location:editadospj.html")

?>
