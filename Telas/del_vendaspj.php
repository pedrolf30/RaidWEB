<?php

$id = $_GET['id'];

require ("conectbd.php");

mysqli_query($link, "DELETE FROM vendapj WHERE id = $id");

header("Location: excluidos.html")

?>
