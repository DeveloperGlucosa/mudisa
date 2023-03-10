<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "productos";
    protected $timestamp = false;

    public function Category(){
        return $this->belongsTo(Category::class, 'cat');
    }
}
