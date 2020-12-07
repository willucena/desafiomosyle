<?php

namespace Api\Entity;

use MOSYLE\Model\Model;

class User extends Model
{
    public $table = 'users';


    public function save($data)
    {
        $array = (array)$data;

        $query = "insert into {$this->table} (name, email, password) VALUES (:name ,:email ,:password, :drink_count)";
        $stmt = $this->db->prepare($query);
        $stmt->execute($array);
        return true;

    }

    public function update($id, $data){
        $query = "UPDATE {$this->table} SET name = ?, email = ?, password = ? WHERE id = {$id}";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$data->name, $data->email, $data->password ]);
        return true;
    }
}