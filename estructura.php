<?php
// estructura.php — vive siempre en la raíz del proyecto

define('BASE_PATH', __DIR__); // ruta absoluta física en el servidor

$host = $_SERVER['HTTP_HOST'];
define(
    'BASE_URL',
    in_array($host, ['localhost', '127.0.0.1'])
        ? '/malvinas'
        : 'https://' // Definila como 'https://tudominio.ar' o mejor, construila con $_SERVER['HTTP_HOST']:
);

$rutas = [
    'estilos'  =>  '/assets/css/style.css',
    'index_estilos'  =>  '/assets/css/index.css',
    'javascript'  =>  '/assets/js/app.js',
    'index'     => '/index.php',
    'head'     => '/components/head.php',
    'final'     => '/components/final.php',
    'navbar'     => '/components/navbar.php',
    'footer'     => '/components/footer.php',
    'hero'     => '/home/hero.php',
    'noticias_index'     => '/home/noticias.php',
    'actividades_index'     => '/home/actividades.php',
    'produccion_index'     => '/home/produccion.php',
    'biblioteca_index'     => '/home/biblioteca.php',
    'noticias'     => '/paginas/noticias/noticias.php',
];

/* Cuando tengas 30-40 rutas, un solo array $rutas se vuelve difícil de navegar. Podés dividir en rutas.componentes.php, rutas.paginas.php, rutas.assets.php e incluirlos todos desde 
estructura.php en el mismo array. Sigue siendo "un solo punto de verdad", solo que organizado. */


// RUTA FÍSICA DEL SERVIDOR
// Para require/include
function ruta($clave) {
    global $rutas;
    if (!isset($rutas[$clave])) {
        die("Ruta no definida en estructura.php: $clave");
    }
    return BASE_PATH . $rutas[$clave];
}
// Para archivos PHP internos
//  ruta('modelUser');

// URL DEL NAVEGADOR
// Para href, src, action, etc.
function url($clave) {
    global $rutas;
    if (!isset($rutas[$clave])) {
        die("URL no definida en estructura.php: $clave");
    }
    return BASE_URL . $rutas[$clave];
}
// Para links y URLs del navegador
// url('index');