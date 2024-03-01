<?php 
require 'app/models/Category.model.php';

class Categories{

    public function index(){        
        //require VIEWS_PATH.'/categories/categories.view.php';
    }

    public function showCategories(){
        $cats = Category::getAll();
        require VIEWS_PATH.'/categories/categories.view.php';
    }

    public function showCategory($id){
        $cat = Category::getItem($id);
        require VIEWS_PATH.'/categories/category.view.php';
    }

    public function NewCategory(){
        require VIEWS_PATH.'/categories/newcategory.view.php';
    }

    public function AddCategory($name, $desc){
        $cat = Category::AddItem($name, $desc);
        require VIEWS_PATH.'/categories/category.view.php';        
    }

    public static function EditCategory($id){
        $cat = Category::getItem($id);
        require VIEWS_PATH.'/categories/editcategory.view.php';
    }

    public static function PushCategory($id, $name, $description, $state){
        Category::PushItem($id, $name, $description, $state);
    }

    public static function DelCategory($id){
        Category::DelItem($id);
    }
}

?>