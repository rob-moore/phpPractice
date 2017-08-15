<?php
/**
 * Created by PhpStorm.
 * User: robmoore
 * Date: 8/14/17
 * Time: 1:20 PM
 */

$tasks = $app['database']->selectAll('todos');

require 'views/index.view.php';
