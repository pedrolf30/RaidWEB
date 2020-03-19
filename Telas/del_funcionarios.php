<?php

$cpf = $_GET['cpf'];

require ("conectbd.php");

mysqli_query($link, "DELETE FROM funcionarios WHERE cpf = $cpf");

header("Location: excluidos.html")

?>
