<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class MainController extends Controller
{
    public function index(){
        $productS=Product::get();
        $category=Category::get();
        return view('index',compact('productS','category'));
    }

    public function category(){
        $productS=Product::get();
        return view('category',compact('productS'));
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

    public function selectCat($code=null){
        // dd($code);
        $category=Category::where('code',$code)->first();
        $productS=Product::where('category_id',$category->id)->get();
        return view('category',compact('productS','category'));
    }
}
