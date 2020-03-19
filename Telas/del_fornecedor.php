<?php

$cnpj = $_GET['cnpj'];

require ("conectbd.php");

mysqli_query($link, "DELETE FROM fornecedor WHERE cnpj = $cnpj");

header("Location: excluidos.html")

?>
