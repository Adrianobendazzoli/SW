<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo1</title>
</head>
<body>
    <?php
        $nome = "Adriano";
    ?>
    <p>Olá, eu sou o Adriano</p>
    <?php
        echo "<p>Olá, eu sou o Adriano</p>";
        echo "<p>Olá, eu sou o $nome </p>";
        echo "<p>Olá, eu sou o " . $nome . "</p>"
    ?>
</body>
</html>