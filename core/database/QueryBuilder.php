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

    public function insert($table, $item)
    {

        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($item)),
            ':' . implode(', :', array_keys($item))
        );


        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($item);
        } catch (Exception $e) {
            die('We ran into an error.');
        }


        return $statement;
    }
}