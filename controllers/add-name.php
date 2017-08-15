<?php
/**
 * Created by PhpStorm.
 * User: robmoore
 * Date: 8/15/17
 * Time: 11:08 AM
 */

$app['database']->insertTodo($_POST['name']);

require 'views/add-todo.view.php';
