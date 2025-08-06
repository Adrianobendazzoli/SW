<?php
require 'conexao.php';
$titulo = "Diário de um banana";
$genero = "Humor";
$ano = 2007;
$autor = "Jeff Kinney";
$paginas = 244;

$sql = "INSERT INTO livro (titulo, genero, ano, autor, paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':ano', $ano);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':paginas', $paginas);

if ($stmt->execute()) {
echo "o livro foi inserido com sucesso!";
} else {
echo "Erro ao inserir produto.";
}
?>