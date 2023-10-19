<?php

require('clases/BasicFileManager.php');
require('clases/Files.php');

$fm = new BasicFileManager();
// Borramos posibles archivos anteriores
$fm->newPage();

// Añadimos y movemos a la carpeta files los nuevos archivos que ha subido el user
$headTXT = $fm->send('head', 'archivos/');
$headTXT = $fm->send('main', 'archivos/');
$headTXT = $fm->send('header', 'archivos/');
$headTXT = $fm->send('footer', 'archivos/');

// Escribimos archivo final html
$fm->writeFile();

Files::redirect('view.php');