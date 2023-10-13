<?php
defined('CONTROL') or die('Acesso negado!');

// efetua o logout
session_destroy();

// volta para a página inicial
header('location: index.php?rota=login');