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
	
	require("conectbd.php");

	
    $sqlinsert = "INSERT INTO funcionarios (cpf, nome, salario, cidade, bairro, rua, cep, numero, telefone) VALUES ('$cpf', '$nome', '$salario', '$cidade', '$bairro', '$rua', '$cep', '$numero', '$telefone')";

	

	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");

	header('location:cadastrados.html');

?>