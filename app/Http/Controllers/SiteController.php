<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function hello()
    {
        return 'Hello';
    }
    public function hi()
    {
        return 'Hi';
    }
    public function yolo()
    {
        return 'Yolo';
    }
    public function welcome()
    {
        return 'Welcome back';
    }
}