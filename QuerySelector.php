<?php

class QuerySelector
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }    

    public function getAllTasks(){
        $stmt = $this->pdo->query("SELECT * FROM todos");
        $table = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $table;
    }
}

