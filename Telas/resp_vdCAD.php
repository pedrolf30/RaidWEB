<?php

	$produtos = $_POST['produtos'];
    $quantidade = $_POST['quantidade'];
    $total = $_POST['total'];
  
   
  

	
	require("conectbd.php");


	$sqlinsert = "INSERT INTO vendas_detalhes (produtos, quantidade, total) VALUES ('$produtos', '$quantidade','$total')";


	mysqli_query($link, $sqlinsert) or die ("Não foi possível inserir no Banco");


header('location:cadastrados.html');
?>
