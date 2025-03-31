<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstTest extends Controller
{
    public function index(){
        return response('Hello World', 200);
    }
}
