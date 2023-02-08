<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categorias';  
    protected $timestamp = false;

    public function Products(){
        return $this->hasMany(Product::class, 'cat');
    }
    public function Subcategories(){
        
        $subcategories = DB::table('categorias')->where('subcat', '>', 0)->get();
        return json_decode(json_encode($subcategories), true);
    }

    public function getParentCategory($id){
        $parentCategory = DB::table('categorias')->where('id', $id)->first();
        return json_decode(json_encode($parentCategory), true);
    }
    

}
