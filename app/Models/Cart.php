<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='carts';
    protected $fillable=['user_id','name','price','image','quantity','product_id'];

    public function Products(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
