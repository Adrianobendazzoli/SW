<?php
require 'conexao.php';
$sql = "SELECT * FROM livro";
$stmt = $pdo->query($sql);

while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
   
    echo "id: " . $livro['id'] . "<br>";
    echo "titulo: " . $livro['titulo'] . "<br>";
    echo "gênero: " . $livro['genero'] . "<br>";
    echo "ano: " . $livro['ano'] . "<br>";
    echo "autor: " . $livro['autor'] . "<br>";
    echo "paginas: " . $livro['paginas'] . "<br>
<br>";
}
?>