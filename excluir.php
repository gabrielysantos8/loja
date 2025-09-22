<?php
include 'pedaco.php';
?>


<div style="display: grid; place-items: center; margin-top: 200px">
    <?php
        require 'conexao.php';

        $id = $_GET['id'];

        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            echo "Produto excluído com sucesso! <br>";
        } else {
            echo "Erro ao excluir produto. <br>";
        }
    ?>

    <a  href="listar.php" type="button" class="btn btncor2">Ver lista</a>
</div>
