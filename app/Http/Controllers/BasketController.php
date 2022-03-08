<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            return view('basket', compact('order'));

        }
        return view('basket');
        
    }
        public function checkout(){
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            return view('checkout', compact('order'));

        }
        return view('checkout');
    }

    public function shop(Request $request){
        
        $orderId = session('orderId');
        // dd($orderId);
        if (is_null($orderId)) {
            // dd(2);
           
            return redirect()->route('index');
        }
       

        $order = Order::findOrFail($orderId);

        $succses =$order->saveorder($request->name,$request->phone);

        if($succses){
            session()->flash('succses',"Заказ обработан!!!");
        }
        else{
            session()->flash('succses',"Ошибка !!!");
        }
        return redirect()->route('index');
    }

    public function basketPlace()
    {
        return view('order');
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['orderId' => $order->id]);
        // dd($orderId);

        } else {
            $order = Order::find($orderId);
        }
        if($order->products->contains($productId)){
            $pivotRow=$order->products()->where('product_id',$productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();


        }
        else{
            $order->products()->attach($productId);
        }

        

        return redirect()->route('basket');
    }

    public function basketRemove($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return view('basket', compact('order'));
        } 
        $order = Order::find($orderId);

        if($order->products->contains($productId)){
            $pivotRow=$order->products()->where('product_id',$productId)->first()->pivot;
            if($pivotRow->count<2){
                $order->products()->detach($productId);
            }
            $pivotRow->count--;
            $pivotRow->update();

        }

        

        return redirect()->route('basket');
    }
}
