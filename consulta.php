<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="consultacss.css"/>
    <title>Consulta Fisica</title>
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
 $resultado = mysqli_query($conexao,"SELECT  cpf, nome, endereco, email
 FROM usuariosF;");
 $linhas= mysqli_num_rows($resultado);
 echo "<p><b>Lista de Clientes </b></p>";
 for ($i=0;$i<$linhas; $i++){
     $reg = mysqli_fetch_row($resultado);
     

$tabela = '<table border="1">';//abre table
$tabela.='<table width="900" border="1px">';
$tabela .= '<tr>';//abre uma linha
$tabela .= '<td>CPF</td>'; // colunas do cabeçalho
$tabela .= '<td>Nome</td>';//coluna nome
$tabela .= '<td>Endereço</td>'; //coluna endereco
$tabela .= '<td>E-mail</td>';//coluna email
$tabela .= '</tr>';//fecha linha
$tabela .= '<tr>'; // abre uma linha
$tabela .= '<td width="100">'.$reg[0].'</td>'; // coluna cpf
$tabela .= '<td width="250">'.$reg[1].'</td>'; //coluna nome
$tabela .= '<td width="250">'.$reg[2].'</td>'; // coluna endereco
$tabela .= '<td width="300">'.$reg[3].'</td>'; //coluna email
$tabela .= '</tr>'; // fecha linha
$tabela .='</tbody>'; //fecha corpo
$tabela .= '</table>';//fecha tabela

echo $tabela; 
   
 }

mysqli_close($conexao);

?> 
</h5>
</form>  
</body>
</html>



