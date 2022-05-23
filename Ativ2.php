<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <style>
        body {
            text-align: center;
            margin: 0;
            background-color: #201b2c;
            color: #fff;
        }

        h1 {
            color: #00FFFF;
            font-weight: 800;
            margin: 10;
        }

        img {
            display: block;
            width: 500px;
            margin-left: auto;
            margin-right: auto
        }
    </style>
</head>
<body>

    <?php

    echo "<h1>Resultado do IMC</h1>";

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);

    if ($imc > 25) {

        echo " <br> <h2>você esta acima do peso</h2>";
        echo "<img src='acima.png' />";
    } else {
        echo "<br> <h2>seu peso esta normal!!</h2>";
        echo "<img src='ok.jpg' />";
    }
    ?>

</body>

</html>