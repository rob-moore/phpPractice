<?php
/**
 * Created by PhpStorm.
 * User: robmoore
 * Date: 8/14/17
 * Time: 11:42 AM
 */

class Connection
{
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='. $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
