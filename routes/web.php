<?php

use App\Http\Controllers\RelationController;
use App\Models\Produit;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get("onetoone",[RelationController::class,"oneToOne"]);
Route::get("onetomany",[RelationController::class,"oneToMany"]);
Route::get("manytomany",[RelationController::class,"manyToMany"]);

Route::get("products",function(){
    return view("test")->with("data",Produit::all());
});

Route::get("show/{id}",function($id){
    return Produit::find(Crypt::decrypt($id));
})->name("show");

