<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonControlleur extends Controller
{
    public function index() {
        return view("index");
    }
}
