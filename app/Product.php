<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   

    public function getCat(){
        $category=Category::get()->where('id',$this->category_id)->first();
        return $category;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}

