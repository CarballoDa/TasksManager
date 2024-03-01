<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'app/core/DB.php';
require 'app/controllers/Tasks.controller.php';
require 'app/controllers/Categories.controller.php';

define('VIEWS_PATH', '/home/david/VSC_workspace/app/views');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Arreglo para eliminar index.php del string. Con friendly URL este error no ocurre.
$uri = str_replace("/index.php", "", $uri);

switch ($uri) {
case '':
    $controller = new Tasks();
    $controller->showTasks();
    $controller = new Categories();
    $controller->showCategories();
    break;
case '/':
    $controller = new Tasks();
    $controller->showTasks();
    $controller = new Categories();
    $controller->showCategories();
    break;
case (str_contains($uri, 'Task')):
    require 'app/routes/Tasks.route.php';
    break;
case (str_contains($uri, 'Categor')):
    require 'app/routes/Categories.route.php';
    break;
    default:
    http_response_code(404);
    echo "404 : Página no encontrada";
    break;
}

?>