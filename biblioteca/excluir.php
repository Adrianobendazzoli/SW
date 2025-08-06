<?php
require 'conexao.php';

$id = 6;
$sql = "DELETE FROM livro WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
echo "o livro foi excluído com sucesso!";
} else {
echo "Erro ao excluir produto.";
}
?>