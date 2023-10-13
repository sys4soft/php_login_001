<?php
defined('CONTROL') or die('Acesso negado!');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação</title>
</head>
<body>
    <h3>Bem-vindo à aplicação!</h3>
    <hr>
    <span>Usuário: <?= $_SESSION['usuario'] ?></span>
    <span>
        <a href="?rota=logout">Sair</a>
    </span>
    <hr>
    <p>[conteúdo]</p>
</body>
</html>