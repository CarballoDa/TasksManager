<?php 
class Task{

    public static function getAll(){
        $db = DB::getInstance();
        // Prepare to prevent SQL inyection
        // $stmt = $db->prepare('SELECT * FROM tasks');
        $stmt = $db->prepare('SELECT a.*, b.name as category_name FROM tasks as a JOIN categories as b WHERE a.category_id = b.id;');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getItem($id){
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('SELECT a.*, b.name as category_name FROM tasks as a JOIN categories as b WHERE a.id = :id AND b.id = a.category_id');
        // Sanitizamos la entrada
        $id = filter_var($id, FILTER_VALIDATE_INT);
        // Vinculamos el parámetro :id 
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Obtenemos la task
        $task = $stmt->fetch();

        // Retornamos instancia de task o null si no existe
        if ($task) {
            return $task;
        } else {
            return null;
        }
    }

    public static function AddItem($name, $desc, $category_id, $state, $created, $executed){
        $created = date('Y-m-d');
        $executed = date('Y-m-d');
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('INSERT INTO tasks (name, description, state, created, executed, category_id) VALUES (?,?,?,?,?,?);');
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$desc);
        $stmt->bindParam(3,$state);
        $stmt->bindParam(4,$created);
        $stmt->bindParam(5,$executed);
        $stmt->bindParam(6,$category_id);
        $stmt->execute();
        return self::getItem($db->lastInsertId());
    }

    public static function PushItem($id, $name, $desc, $category_id, $state, $executed){
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('UPDATE tasks SET name=?, description=?, state=?, executed=?, category_id=? WHERE id=?');
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$desc);
        $stmt->bindParam(3,$state);
        $stmt->bindParam(4,$executed);
        $stmt->bindParam(5,$category_id);
        $stmt->bindParam(6,$id);
        $stmt->execute();
        return self::getItem($id);
    }

    public static function DelItem($id){
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('DELETE FROM tasks WHERE id=?');
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return self::getItem($id);
    }
}
?>