<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\homeController;
use App\http\Controllers\livrosController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\WishlistController;
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
Route::get('/',[homeController::class,'mostrarHome']) -> name('home');
Route::get('/livros',[livrosController::class,'todosLivros']) -> name('livros');
Route::get('/desejos',[livrosController::class,'desejos']) -> name('desejos') ->middleware('auth') ;
Route::delete('/desejos/{id}', [livrosController::class, 'destroy'])->middleware('auth');
Route::get('/cadastro',[livrosController::class,'mostrarLivros']) -> name('cadastro');
Route::post('/cadastro',[livrosController::class,'BDlivros']) -> name('bdlivros');

Route::get('add/to-wishlist/{livros_id}',[WishlistController::class,'addToWishlist']) ;



Route::get('search',[homeController::class,'searchProducts']) ;

 Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/cadastro', function () {
        return view('cadastro');
     });
 });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

