<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            text-align: center;
            margin: 0;
            background-color: #201b2c;
            color: #fff;
        }

        h2{
        font-weight: 800;
        margin: 10;
    }

    </style>
<?php

    $user = $_POST['user'];
    $senha = $_POST['senha'];


    if ($user == 'etecia' &&  $senha == 'etecia238'){
        echo "<h2>Autenticação  realizada  com  sucesso</h2>";
    }
    else{
        echo "<h2>Você não tem permissão de visualizar essa página</h2>";
    };

?>