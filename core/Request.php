<?php
/**
 * Created by PhpStorm.
 * User: robmoore
 * Date: 8/15/17
 * Time: 10:24 AM
 */

namespace App\Core;

class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}