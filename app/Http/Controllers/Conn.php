<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Conn extends Controller
{
    public function account(){
        return view('account');
    }
}
//single action::php artisan make:SAC --invokeable
//multiaction::php artisan make:controller ExploreController --resource