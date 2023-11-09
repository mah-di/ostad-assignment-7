<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function sayHello(): string
    {
        return "<h1>Hello, Laravel!</h1>";
    }
}
