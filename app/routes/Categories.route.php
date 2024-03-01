<?php 
switch ($uri) {
case '/showCategories':
    $controller = new Categories();
    $controller->showCategories();
    break;
case '/GeneralCategories':
    $controller = new Categories();
    $controller->showCategories();
    break;
case '/showCategory':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $controller = new Categories();
    $controller->showCategory($id);
    break;
case '/newCategory':
    $controller = new Categories();
    $controller->NewCategory();
    break;
case '/addCategory':
    $name = isset($_GET['name']) ? $_GET['name'] : null;
    $desc = isset($_GET['desc']) ? $_GET['desc'] : null;
    $controller = new Categories();
    $controller->AddCategory($name, $desc);
    break;
case '/editCategory':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $controller = new Categories();
    $controller->EditCategory($id);
    break;
case '/pushCategory':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $name = isset($_GET['name']) ? $_GET['name'] : null;
    $desc = isset($_GET['desc']) ? $_GET['desc'] : null;
    $state = isset($_GET['state']) ? $_GET['state'] : null;
    $controller = new Categories();
    $controller->PushCategory($id, $name, $desc, $state);
    $controller->showCategory($id);
    break;
case '/delCategory':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $controller = new Categories();
    $controller->DelCategory($id);
    $controller = new Tasks();
    $controller->showTasks();
    $controller = new Categories();
    $controller->showCategories();
    break;
}
?>