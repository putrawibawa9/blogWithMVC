<?php

abstract class Model
{
    protected static $table;
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public static function all()
    {
        $instance = new static();
        $instance->db->query('SELECT * FROM ' . static::$table);
        return $instance->db->resultSet();
    }

    public static function find($id)
    {
        $instance = new static();
        $instance->db->query('SELECT * FROM ' . static::$table . ' WHERE id_blog = :id');
        $instance->db->bind(':id', $id);
        return $instance->db->single();
    }

    public static function delete($id)
    {
        $instance = new static();
        $instance->db->query('DELETE FROM ' . static::$table . ' WHERE id_blog = :id');
        $instance->db->bind(':id', $id);
        $instance->db->execute();
        return $instance->db->rowCount();
    }

    public function insert()
    {
        $fields = get_object_vars($this);
        unset($fields['db']);

        $columns = implode(', ', array_keys($fields));
        $placeholders = ':' . implode(', :', array_keys($fields));

        $sql = 'INSERT INTO ' . static::$table . ' (' . $columns . ') VALUES (' . $placeholders . ')';
        $this->db->query($sql);
        foreach ($fields as $field => $value) {
            $this->db->bind(':' . $field, $value);
        }
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Additional common methods can be added here (e.g., find, save, delete, etc.)
}
?>
