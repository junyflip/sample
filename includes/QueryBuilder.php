<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertTask($title, $description)
    {
        $statement = $this->pdo->prepare("INSERT INTO tasks(title, description)
            VALUES(:title, :description)");
        
        $statement->execute(
            array(
                "title" => $title,
                "description" => $description
        ));
    }
}