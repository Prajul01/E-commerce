<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='products';
    protected $fillable=['name', 'price', 'category_id', 'created_by','image','updated_by','description','short_description'];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function Creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
