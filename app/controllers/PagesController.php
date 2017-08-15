<?php
/**
 * Created by PhpStorm.
 * User: robmoore
 * Date: 8/15/17
 * Time: 1:39 PM
 */

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');

        return view('index');

    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}