<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilocss.css" >
        <title>Cadastro</title>
</head>
<body>
<nav id="menu">
        <ul>
            <li><a href="login.html">Inicio</a></li>
            <li><a href="consulta.php">Colaboradores</a></li>
            
            
        </ul>
    </nav>      

<form>
<h3>
<?php
include "conn.php";

if(empty($_POST['nome']) || empty($_POST['cpf']) || empty($_POST['email'])|| empty($_POST['endereco'])|| empty($_POST['senha'])) {
	header('Location: registra.html');
	exit();
}
$nome    = $_POST['nome'];
$cpf     = $_POST['cpf'];
$email = $_POST['email'];
$endereco     = $_POST['endereco'];
$senha      = $_POST['senha'];

$sql = "INSERT INTO usuariosF(cpf,nome,email,endereco,senha) VALUES ";
        $sql.= "('$cpf','$nome','$email','$endereco','$senha')";
        $resultado = mysqli_query($conexao,$sql);
        echo "Você foi cadastrado com Sucesso!!";


?>

</form>
</h3>
</body>
</html>