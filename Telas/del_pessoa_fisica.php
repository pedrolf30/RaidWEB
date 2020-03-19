<?php

$cpf = $_GET['cpf'];

require ("conectbd.php");

mysqli_query($link, "DELETE FROM pessoa_fisica WHERE cpf = $cpf");

header("Location: excluidos.html")

?>

if ($acao == 'excluir'):
    // Exclui o registro do banco de dados
    $sql = 'DELETE FROM condominio WHERE id = :id';
    $stm = $conexao->prepare($sql);
    $stm->bindValue(':id', $id);
    $retorno = $stm->execute();

    if ($retorno):
        echo "<div class='alert alert-success' role='alert'>Registro excluído com sucesso, aguarde você está sendo redirecionado ...</div> ";
    else:
        echo "<div class='alert alert-danger' role='alert'>Erro ao excluir registro!</div> ";
    endif;

    echo "<meta http-equiv=refresh content='3;URL=consulta_condominio.php'>";
endif;
?>