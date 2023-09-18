<?php

class Students_model
{
    private $table = 'students', $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllStudents()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultAll();
    }

    public function getStudentById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id=:id OR nim=:id");
        $this->db->bind('nim', $id);
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function addStudent($data)
    {
        $this->db->query("INSERT INTO {$this->table} VALUES ('', :nim, :name, :email, :department)");
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('department', $data['department']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function delStudent($nim)
    {
        $this->db->query("DELETE FROM {$this->table} WHERE nim=:nim");
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function changeStudent($data)
    {
        $this->db->query("UPDATE {$this->table} SET nim=:nim, name=:name, email=:email, department=:department WHERE id=:id");
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('department', $data['department']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
