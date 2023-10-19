<?php

class BasicFileManager {
    
    function __construct() {
        
    }
    
    function newPage() {
        unlink('archivos/index.html');
        unlink('archivos/footer.txt');
        unlink('archivos/header.txt');
        unlink('archivos/head.txt');
        unlink('archivos/main.txt');
    }
    
    static function getIndex() {
        return file_get_contents('archivos/index.html');
    }
    
    function send($name, $target) {
        $number = 1;
        // Subimos la imagen
        $uploaded = $this->upload($name, $target);
        // Comprobamos si no se ha subido
        if(!$uploaded) {
            $number = 0;
        }
        return $number;
    }
    
    function upload(string $name, string $target) {
        // Si el $FILES del archivo pasado por parametro esta seteado (tiene valores)
        // y el tipo del archivo contiene 'image' (es una imagen)
        // y si no tiene errores
        if(isset($_FILES[$name]) &&
            $_FILES[$name]['error'] == 0 && 
                str_contains(mime_content_type($_FILES[$name]['tmp_name']), 'text')) {
                // Cambiamos el nombre del archivo añadiendole el prefijo
                $fileName = $name . '.txt'; // $_FILES[$name]['name'];
                // Devolvemos la salida de mover el archivo a la carpeta que queremos
                return move_uploaded_file($_FILES[$name]['tmp_name'], 'archivos/' . $fileName);
        }
        return false;
    }
    
    function writeFile() {
        $finalFile = fopen('archivos/index.html', 'w');
        fwrite($finalFile, '<!DOCTYPE html>');
        fwrite($finalFile, "\n");
        fwrite($finalFile, '<html lang="es">');
        fwrite($finalFile, "\n");
        fwrite($finalFile, file_get_contents('archivos/head.txt'));
        fwrite($finalFile, "\n");
        fwrite($finalFile, '<body>');
        fwrite($finalFile, "\n");
        fwrite($finalFile, file_get_contents('archivos/header.txt'));
        fwrite($finalFile, "\n");
        fwrite($finalFile, file_get_contents('archivos/main.txt'));
        fwrite($finalFile, "\n");
        fwrite($finalFile, file_get_contents('archivos/footer.txt'));
        fwrite($finalFile, "\n");
        fwrite($finalFile, '</body>');
        fwrite($finalFile, "\n");
        fwrite($finalFile, '</html>');
        fclose($finalFile);
    }
}