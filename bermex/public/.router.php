<?php
// Router pour le serveur web interne de PHP (php -S)
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $path;
if ($path !== '/' && file_exists($file)) {
    return false; // servir le fichier tel quel
}
require __DIR__ . '/index.php';

