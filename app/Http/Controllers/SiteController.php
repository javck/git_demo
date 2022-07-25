<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function hello(){
        return 'Hello';
    }
    public function hi() {
        return 'Hi';
    }
}