<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function products(){
    return $this->belongsToMany(product::class, 'order_products')->withPivot('quantity');
    }
    public function category(){
        return $this->belongsTo(category::class,'categoryname','id');
    }

    public function orders(){
        return $this->belongsToMany(order::class,'order_products');
    }

}
