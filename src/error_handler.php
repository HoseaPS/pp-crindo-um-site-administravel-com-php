<?php
function setInternalServerError($errno = null, $errstr = null, $errfile = null, $errline = null) {
    echo '<h1>Error</h1>';
   
    echo '<ul>';
    foreach (debug_backtrace() as $error) {
        if (!empty($error['file'])) {
            echo '<li>';
            echo $error['file'] . ':';
            echo $error['line'];
            echo '</li>';
        }
    }
    echo '</ul>';
    exit;
}
set_error_handler('setInternalServerError');
set_exception_handler('setInternalServerError');