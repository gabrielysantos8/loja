<?php
    require 'conexao.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Erro ao excluir produto.";
    }
?>
