<?php

	$data = $_POST['data1'];
    $horario = $_POST['horario1'];
    $cliente = $_POST['cliente1'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade1'];
    $forma = $_POST['forma1'];
    $preco = $_POST['preco1'];
 

	
	require("conectbd.php");


	$sqlinsert = "INSERT INTO vendapj (data, horario, cliente, produto, quantidade, forma, preco) VALUES ('$data', '$horario', '$cliente', '$produto', '$quantidade', '$forma', '$preco')";


	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");


header('location:cadastrados.html');
?>
