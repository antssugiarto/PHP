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
        $this->db->query("SELECT * FROM {$this->table} WHERE nim=:nim",);
        $this->db->bind('nim', $nim);
        return $this->db->resultSingle();
    }
}
