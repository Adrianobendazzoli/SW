<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>

</head>
<body>
    <?php
    define("PI", 3.141592);
    $raio = 5;
    $area = 4 * PI * ($raio * $raio);

    $volume = (4/3) * PI * ($raio * $raio * $raio);

    echo "Raio da esfera: $raio <br>";
    echo "Área da esfera: $area <br>";
    echo "Volume da esfera: $volume <br>";;
    ?>    
</body>
</html>