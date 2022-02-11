<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function category(){
        return view('category');
    }

    public function basket(){
        return view('basket');
    }

    public function popular(){
        return view('popular');
    }

    public function checkout(){
        return view('checkout');
    }
}
