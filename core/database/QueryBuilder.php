<?php
/**
 * Created by PhpStorm.
 * User: robmoore
 * Date: 8/14/17
 * Time: 12:36 PM
 */

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insertTodo($item)
    {
        $statement = $this->pdo->
        prepare("insert into `todos` (`id`, `description`, `completed`) values (NULL, '{$item}', '0')")
            ->execute();

        return $statement;
    }
}