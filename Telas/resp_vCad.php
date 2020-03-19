<?php

	$data = $_POST['data'];
    $horario = $_POST['horario'];
    $cliente = $_POST['cliente'];
    $forma = $_POST['forma'];
    $preco = $_POST['preco'];
  
   
  

	
	require("conectbd.php");


	$sqlinsert = "INSERT INTO vendas (data, horario, cliente,  forma, preco) VALUES ('$data', '$horario', '$cliente', '$forma', '$preco')";


	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");


header('location:cadastrados.html');
?>
