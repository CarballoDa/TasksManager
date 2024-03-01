<?php 
class DB{
    private static $instance = null;

    public static function getInstance(){
        if (!self::$instance) {
            try{
                self::$instance = new PDO('mysql:host=localhost;dbname=tasksmanager', 'root', 'mySQLroot');
            }catch(PDOException $e){
                echo "Errir en la conexión a base de datos : ".$e->getMessage()();
            }
        }
        return self::$instance;
    }
}
?>