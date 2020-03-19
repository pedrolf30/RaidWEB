<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bazarzao";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "echo '<table>';

echo '<tr>';

echo '<td>Nome</td>';

echo '<td>Preço</td>';



echo '</tr>';

// Armazena os dados da consulta em um array associativo

while($registro = mysql_fetch_assoc($consulta)){

echo '<tr>';

echo '<td>'.$registro["nome"].'</td>';

echo '<td>'.$registro["telefone"].'</td>';

echo '<td>'.$registro["email"].'</td>';

echo '</tr>';

}

echo '</table>';
";
    }
?>