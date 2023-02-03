<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $lang = App::getLocale();
    return view('home', compact('lang'));
})->name('home');
Route::get('/about', function(){
    return view('about');
})->name('about');
Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/setLocale/{lang}', function($locale){
    if(!in_array($locale, ['es', 'en'])){
        abort(400);
    }
    App::setLocale($locale);
    config('app.locale', $locale);
    return redirect()->back();
})->name('setLocale');

Route::get('/categoria/{param}', function($param){
    $category = Category::where('seo1', $param)->orWhere('seo2', $param)->firstOrFail();
    $id = $category->id;
    return view('products.category', compact('category', 'id'));
})->name('category');
