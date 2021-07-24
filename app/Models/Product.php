<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $quantity = null;

    protected $fillable = ['slug', 'category_id', 'title', 'image', 'price', 'old_price', 'stock', 'description', 'short_description'];

    /*public function getRouteKeyName()
    {
        return 'slug';
    }*/

    public function hasStock($quantity)
    {
        return $this->stock >= $quantity;
    }

    public function outOfStock()
    {
        return $this->stock === 0;
    }

    public function inStock()
    {
        return $this->stock >= 1;
    }

    public function order()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withPivot('quantity');
    }
}
