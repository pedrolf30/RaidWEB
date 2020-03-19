<?php

	$cnpj = $_POST['cnpj'];
	$razao = $_POST['razao'];
	$cidade = $_POST['cidade'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	
	
	require("conectbd.php");


	$sqlinsert = "INSERT INTO fornecedor (cnpj, razao, cidade, email, telefone) VALUES ('$cnpj', '$razao', '$cidade', '$email', '$telefone')";


	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");

header('location:cadastrados.html');

?>
