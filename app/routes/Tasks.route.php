<?php 
switch ($uri) {
case '/showTasks':
    $controller = new Tasks();
    $controller->showTasks();
    break;
case '/GeneralTasks':
    $controller = new Tasks();
    $controller->showTasks();
    break;
case '/showTask':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $controller = new Tasks();
    $controller->showTask($id);
    break;
case '/newTask':
    $controller = new Tasks();
    $controller->NewTask();
    break;
case '/addTask':
    $name = isset($_GET['name']) ? $_GET['name'] : null;
    $desc = isset($_GET['desc']) ? $_GET['desc'] : null;
    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
    $created = isset($_GET['created']) ? $_GET['created'] : null;
    $executed = isset($_GET['executed']) ? $_GET['executed'] : null;
    $state = isset($_GET['state']) ? $_GET['state'] : null;
    $controller = new Tasks();
    $controller->AddTask($name, $desc, $category_id, $state, $created, $executed);
    break;
case '/editTask':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $controller = new Tasks();
    $controller->EditTask($id);
    break;
case '/pushTask':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $name = isset($_GET['name']) ? $_GET['name'] : null;
    $desc = isset($_GET['desc']) ? $_GET['desc'] : null;
    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
    $executed = isset($_GET['executed']) ? $_GET['executed'] : null;
    $state = isset($_GET['state']) ? $_GET['state'] : null;
    $controller = new Tasks();
    $controller->PushTask($id, $name, $desc, $category_id, $state, $executed);
    $controller->showTask($id);
    break;
case '/delTask':
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $controller = new Tasks();
    $controller->DelTask($id);
    $controller->showTasks();
    $controller = new Categories();
    $controller->showCategories();
    break;
}
?>