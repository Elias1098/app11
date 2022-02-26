<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table= 'cart';
    function users()
    {
        return $this->belongsToMany(User::class);
    }
    function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
