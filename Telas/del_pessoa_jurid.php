<?php

$cpf = $_GET['cpf'];

require ("conectbd.php");

mysqli_query($link, "DELETE FROM clientes WHERE cpf = $cpf");

header("Location: excluidos.html")

?>
