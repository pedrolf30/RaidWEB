<?php

	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$salario = $_POST['salario'];
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
	(CPF, Nome, Endereco, Cidade)


	VALUES - segunda parte deve estar de acordo com o arquivo em php.
	('$cpf', '$nome', '$endereco', '$cidade')

	*/

	mysqli_query($link, "UPDATE funcionarios SET cpf = '$cpf', nome = '$nome', salario = '$salario', cidade = '$cidade', bairro = '$bairro', rua = '$rua', cep = '$cep', numero = '$numero',telefone = '$telefone' WHERE cpf = '$cpf' ");

	mysqli_close();

	header("Location:editadosf.html")

?>
