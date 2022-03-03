<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$CPF=123456;
$nome = "gabriel";
$endereco = "quadra 2 conjnto a casa 28";
$email = "gabriel.2000mouraD@gmail.com";
$tabela = '<table border="1">';//abre table
$tabela .='<thead>';//abre cabeçalho
$tabela .= '<tr>';//abre uma linha
$tabela .= '<th>CPF</th>'; // colunas do cabeçalho
$tabela .= '<th>Nome</th>';//coluna nome
$tabela .= '<th>Endereço</th>'; //coluna endereco
$tabela .= '<th>E-mail</th>';//coluna email
$tabela .= '</tr>';//fecha linha
$tabela .='</thead>'; //fecha cabeçalho
$tabela .='<tbody>';//abre corpo da tabela
$tabela .= '<tr>'; // abre uma linha
$tabela .= '<td>'.$CPF.'</td>'; // coluna cpf
$tabela .= '<td>'.$nome.'</td>'; //coluna nome
$tabela .= '<td>'.$endereco.'</td>'; // coluna endereco
$tabela .= '<td>'.$email.'</td>'; //coluna email
$tabela .= '</tr>'; // fecha linha
$tabela .='</tbody>'; //fecha corpo
$tabela .= '</table>';//fecha tabela

echo $tabela; 

?>


</body>
</html>