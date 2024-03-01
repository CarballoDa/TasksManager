<?php 
class Category{

    public static function getAll(){
        $db = DB::getInstance();
        // Prepare to prevent SQL inyection
        $stmt = $db->prepare('SELECT * FROM categories');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getItem($id){
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('SELECT * FROM categories WHERE id = :id');
        // Sanitizamos la entrada
        $id = filter_var($id, FILTER_VALIDATE_INT);
        // Vinculamos el parámetro :id 
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Obtenemos la category
        $category = $stmt->fetch();

        // Retornamos instancia de task o null si no existe
        if ($category) {
            return $category;
        } else {
            return null;
        }
    }

    public static function AddItem($name, $desc){
        $label = str_replace(" ", "", $name);
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('INSERT INTO categories (name, label, description, state) VALUES (?,?,?,0);');
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$label);
        $stmt->bindParam(3,$desc);
        $stmt->execute();
        return self::getItem($db->lastInsertId());
    }

    public static function PushItem($id, $name, $desc, $state){
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('UPDATE categories SET name=?, description=?, state=? WHERE id=?');
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$desc);
        $stmt->bindParam(3,$state);
        $stmt->bindParam(4,$id);
        $stmt->execute();
        return self::getItem($id);
    }

    public static function DelItem($id){
        $db = DB::getInstance();
        // Sentencia preparada para prevenir inyección SQL
        $stmt = $db->prepare('DELETE FROM categories WHERE id=?');
        $stmt->bindParam(1,$id);
        $stmt->execute();
        return self::getItem($id);
    }
}

?>