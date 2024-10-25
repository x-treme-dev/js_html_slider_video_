<?php
require_once 'vendor/autoload.php';

// сообщить шаблонизатору местонахождение шаблонов
$loader = new \Twig\Loader\FilesystemLoader(__DIR__. '\templates');
// cоздаем объект шаблонизатора, указав необходимые опции cache и auto_reload. 
$twig = new \Twig\Environment($loader, [
    'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
]);

// Теперь $twig готов к использованию
//$template = $twig->load('slider.twig');
//echo $template->render();
$template = $twig->load('videoarchive.twig');
echo $template->render();
?>