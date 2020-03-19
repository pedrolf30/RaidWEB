<?php

	$cnpj = $_POST['cnpj'];
	$razao = $_POST['razao'];
	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$rua = $_POST['rua'];
	$cep = $_POST['cep'];
	$numero = $_POST['numero'];
	$telefone = $_POST['telefone'];

	
	require("conectbd.php");


	$sqlinsert = "INSERT INTO pessoa_jurid (cnpj, razao, cidade, bairro, rua, cep, numero, telefone) VALUES ('$cnpj', '$razao', '$cidade','$bairro', '$rua',  '$cep',  '$numero', '$telefone')";


	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");


	header('location:cadastrados.html');




?>
