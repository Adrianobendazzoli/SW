<?php
require 'conexao.php';

$id = 3;
$novoAno =1865;
$sql = "UPDATE livro SET ano = :ano WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':ano', $novoAno);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
echo "o livro foi atualizado com sucesso!";
} else {
echo "Erro ao atualizar produto.";
}
?>