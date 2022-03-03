<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilocss.css" >
	<title>Perfil</title>
</head>
<body>

<nav id="menu">
        <ul>
		    <li><a href="login.html">Inicio</a></li>
            <li><a href="alterar.html">Alterar Senha</a></li>
            <li><a href="excluir.html">Excluir conta</a></li>
		</ul>
</nav> 
<form><h3>
<?php
include "conn.php";

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: login.html');
	exit();
}

$email = $_POST['email'];
$senha = $_POST['senha'];
$query = "SELECT * FROM usuariosF WHERE email = '$email' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);



if ($row <= 0){
	echo "E-mail ou senha errado!";
	exit;
}
else {
echo "Login efetuado com sucesso!! Caso queira efetuar mudanças nos seus dados ou queira excluir o cadastro utilize as funções presentes na tela.";
}
?>
</h3>
</form>	
</body>
</html> 




