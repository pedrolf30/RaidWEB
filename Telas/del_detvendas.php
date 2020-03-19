<?php

$id = $_GET['ID'];

require ("conectbd.php");

mysqli_query($link, "DELETE FROM vendas_detalhes WHERE ID = $id");

header("Location: excluidos.html")

?>
