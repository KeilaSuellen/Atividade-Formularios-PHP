<?php

if(isset($_POST['mb'])){
    echo "Muito bom <br> " .$_POST['mb'];
    echo"<br>";
}
if(isset($_POST['b'])){
    echo "bom <br>" .$_POST['b'];
    echo"<br>";
}
if(isset($_POST['r'])){
    echo "Regular<br> " .$_POST['r'];
    echo"<br>";
}
if(isset($_POST['secao'])){
    echo "Qual a Seção que você maiis gostou: <br>" .$_POST['secao'];
    echo"<br>";
}
if(isset($_POST['outra'])){
    echo "outra: <br>" .$_POST['outra'];
    echo"<br>";
}
if(isset($_POST['sug'])){
    echo "comentário: <br>" .$_POST['sug'];
    echo"<br>";
}
if(isset($_POST['endereco'])){
    echo "Endereço: <br>" .$_POST['endereco'];
    echo"<br>";
}
if(isset($_POST['nome'])){
    echo "Nome: <br>" .$_POST['nome'];
    echo"<br>";
}
if(isset($_POST['email'])){
    echo "E-mail: <br>" .$_POST['email'];
    echo"<br>";
}
if(isset($_POST['tel'])){
    echo "Fone: <br>" .$_POST['tel'];
    echo"<br>";
}
if(isset($_POST['novidades'])){
    echo "quero receber novdades: <br>" .$_POST['novidades'];
    echo"<br>";
}

?>