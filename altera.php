<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilocss.css"/>
    <title>Alteração de Senha</title>
</head>
<body>
<nav id="menu">
        <ul>
            <li><a href="login.html">Inicio</a></li>
            
		</ul>
</nav> 
    
        <form>
        <h5>
</body>
<?php
include "conn.php";

if(empty($_POST['senha']) || empty($_POST['cpf'])) {
	header('Location: alterar.html');
	exit();
}
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

$query = "UPDATE usuariosF SET senha = '$senha' WHERE cpf = '$cpf'" ;
$resultado = mysqli_query($conexao,$query);

echo "Senha Alterada com Sucesso!";

?>
</h5>
</form>  
</body>
</html>