<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function products(){
        return $this->belongsToMany(product::class,'order_products')->withPivot('quantity');
=======
    public function category(){
        return $this->belongsTo(category::class,'categoryname','id');
>>>>>>> ea5a34a014353af9ff3a5adab586511c8fc20704
    }

    public function orders(){
        return $this->belongsToMany(order::class,'order_products');
    }
<<<<<<< HEAD
=======

>>>>>>> ea5a34a014353af9ff3a5adab586511c8fc20704
}
