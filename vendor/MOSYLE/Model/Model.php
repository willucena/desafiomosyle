<?php

namespace MOSYLE\Model;

abstract class Model
{
    protected $db;

    protected $table;


    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "select name, email, password, drink_count from {$this->table}";
        $data =  $this->db->query($query)->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }



    public function find($id)
    {
        $query = "select name, email, password from {$this->table} WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);

    }
}