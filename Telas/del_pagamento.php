<?php

$id = $_GET['id'];

require ("conectbd.php");

mysqli_query($link, "DELETE FROM forma_pagamento WHERE id = $id");

header("Location: excluidos.html")

?>
