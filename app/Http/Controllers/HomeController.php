<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class HomeController extends Controller
{
    
    function home(){
        $data = ['nom'=>'Dip', 'premon'=>'Marc', 'age' => 20];
        return Inertia::render("Home/Home", $data);
    }
}
