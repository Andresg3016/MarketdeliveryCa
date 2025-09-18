<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Este archivo permite emular la funcionalidad de "mod_rewrite" de Apache
// cuando se usa el servidor embebido de PHP. De esta forma puedes probar
// tu aplicación Laravel sin necesidad de configurar un servidor real.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';