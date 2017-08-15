<?php
/**
 * Created by PhpStorm.
 * User: robmoore
 * Date: 8/15/17
 * Time: 10:24 AM
 */

class Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}