<?php

if (resolve('/')) {
    render('site/home', 'site');
} elseif (resolve('/teste')) {
    echo 'Página teste';
} else {
    http_response_code(404);
    echo 'Página não encontrada';
}