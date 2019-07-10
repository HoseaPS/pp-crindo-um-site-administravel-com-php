<?php 

$path = $_SERVER['PATH_INFO'] ?? '/';

if ($path == '/') {
    require __DIR__ . '/site/routes.php';
} elseif ($path == '/teste') {
    require __DIR__ . '/site/teste.php';
} else {
    echo 'Página não encontrada';
}