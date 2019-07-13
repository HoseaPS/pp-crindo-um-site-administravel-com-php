<?php

if (resolve('/')) {
    render('site/home', 'site');
} elseif (resolve('/teste')) {
    echo 'Página teste';
} else {
    echo 'Página não encontrada';
}