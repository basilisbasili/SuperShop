<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    // public function users(){
    //     return $this->belogsTo(User::class);
    // }

    public function calculate(){
        $sum=0;
        foreach($this->products as $product){
            $sum += $product->getprice();
        }
        return $sum;
    } 

    public function saveorder($name,$phone){
        if(1){
            $this->name=$name;
            $this->phone=$phone;
            $this->status=1;            
            $this->save();
            
            session()->forget('orderId');
            return true;
        }
        else{
            return false;
        }

        
        
    } 


}
