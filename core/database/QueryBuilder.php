<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $class = 'stdClass')
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table;");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function selectOne($table, $id, $class = 'stdClass')
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id = $id;");
        try {
            $statement->execute();
            $res = $statement->fetchAll(PDO::FETCH_CLASS, $class);
            if (count($res) != 1) {
                die("Not found");
            }
            return $res[0];
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $params)
    {
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s);",
            $table,
            implode(', ', array_keys($params)),
            ':' . implode(', :', array_keys($params))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
