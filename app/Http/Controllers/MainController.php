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
        $categorys=Category::get();
        // dd($category); 
        return view('category',compact('productS','categorys'));
    }

    public function basket(){
        return view('basket');
    }
    
    public function basketAdd(){
        return view('basket/add/{id}');
    }

    public function detal($Pid){
        $product=Product::find($Pid);
        // dd($product);
        return view('detal',compact('product'));
    }

    public function checkout(){
        return view('checkout');
    }

    public function selectCat($code=null){
        $category=Category::where('code',$code)->first();
        $categorys=Category::get();
        // dd($code,$category);

        $productS=Product::where('category_id',$category->id)->get();
        return view('category',compact('productS','categorys'));
    }
}
