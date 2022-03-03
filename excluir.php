<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilocss.css" >
    <title>Exclusão</title>
</head>
<body>
<nav id="menu">
        <ul>
            <li><a href="login.html">Inicio</a></li>
            
		</ul>
</nav> 
<form>
<h3>
<?php
include "conn.php";
if(empty($_POST['senha']) || empty($_POST['email'])) {
	header('Location: excluir.html');
	exit();
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "DELETE FROM usuariosF WHERE email = '{$email}' AND senha = '{$senha}'"; 
        $resultado = mysqli_query($conexao,$sql); 
        echo("Registro excluido com sucesso! ");

?>
</h3>
</form>
</body>
</html>