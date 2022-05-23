<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora</title>

<head>
    <style>
        body {
            text-align: center;
            margin: 0;
            background-color: #201b2c;
            color: #fff;
        }

        h2 {
            color: #00FFFF;
            font-weight: 800;
            margin: 10;
        }
    </style>

</head>

<body>
    <?php

    echo "<h2>Resultado</h2>";

    $Base = $_POST['Base'];
    $largura = $_POST['largura'];


    $area =  $Base * $largura;
    $perimetro = 2 * ($Base * $largura);

    echo " <br> A área do retangulo é : $area";

    echo "<br> O Perimetro do retangulo é : $perimetro";

    ?>
</body>

</html>