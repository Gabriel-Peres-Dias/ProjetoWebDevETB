<?php
    $conexao = mysqli_connect("localhost","root","","projetophp");
    if (!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $bd = mysqli_select_db($conexao,"projetophp");
     if (!$bd){
       Echo ("Banco de Dados inexistente ou Erro de conexão");
    }
?>
