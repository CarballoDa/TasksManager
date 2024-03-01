<?php 
require 'app/models/Task.model.php';

class Tasks{

    public function index(){
        //require VIEWS_PATH.'/tasks/tasks.view.php';
    }

    public function showTasks(){
        $tasks = Task::getAll();
        require VIEWS_PATH.'/tasks/tasks.view.php';
    }

    public function showTask($id){
        $task = Task::getItem($id);
        require VIEWS_PATH.'/tasks/task.view.php';
    }

    public function NewTask(){
        $cats = Category::getAll();
        require VIEWS_PATH.'/tasks/newtask.view.php';
    }

    public function AddTask($name, $desc, $category_id, $state, $created, $executed){
        $cats = Category::getAll();
        $task = Task::AddItem($name, $desc, $category_id, $state, $created, $executed);
        require VIEWS_PATH.'/tasks/task.view.php';        
    }

    public static function EditTask($id){
        $cats = Category::getAll();
        $task = Task::getItem($id);
        require VIEWS_PATH.'/tasks/edittask.view.php';
    }

    public static function PushTask($id, $name, $description, $category_id, $state, $executed){
        Task::PushItem($id, $name, $description, $category_id, $state, $executed);
    }

    public static function DelTask($id){
        Task::DelItem($id);
    }
}

?>