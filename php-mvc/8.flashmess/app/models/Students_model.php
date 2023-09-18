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

    public function getStudentById($nim)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE nim=:nim");
        $this->db->bind('nim', $nim);
        return $this->db->resultSingle();
    }

    public function addStudent($data)
    {
        $this->db->query("INSERT INTO students VALUES ('', :nim, :name, :email, :department)");
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('department', $data['department']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
