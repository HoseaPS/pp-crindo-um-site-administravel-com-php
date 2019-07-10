<?php

if (resolve('/')) {
    echo 'Home';
} elseif (resolve('/teste')) {
    echo 'Página teste';
} else {
    echo 'Página não encontrada';
}