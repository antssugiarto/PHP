<?php

class Students_model
{
    private $dbh, $stmt;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=university";

        try {
            $this->dbh = new PDO($dsn, "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllStudents()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM students");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
