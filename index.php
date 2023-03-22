<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>rabelo</h1>
<?php
echo"isabelly,thaianny,giovanna";
?>
<?php
// variaveis da conexão do banco de dados 
$servidor="localhost";
$usuario="usuariodb";
$senha="senhadb";
$nomebd"nomebancodedados";   // nome banco de dados que sera usado
// cria a conexão com o banco de dados 
$conn=new mysqli($servidor,$usuario,$senha,$nomedb);
// checa a conexao
if ($conn->connect_error) {
  die ("conexao falhou:".$conn->connect_error);
}

echo"Conectado ao banco de dados"."<br>";
?>

</body>
</html>
