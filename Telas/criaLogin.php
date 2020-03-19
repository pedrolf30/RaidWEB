<?php

	$NOME = $_POST['NOME'];
	$SENHA = $_POST['SENHA'];
	$EMAIL = $_POST['EMAIL'];
	
	require("conectbd.php");

	
    $sqlinsert = "INSERT INTO usuario (login, senha, EMAIL) VALUES ('$NOME', '$SENHA', '$EMAIL')";

	

	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");


	header('location:cadastradoslogin.html');

?>