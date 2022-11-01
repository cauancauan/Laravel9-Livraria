<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist($livro_id){
        if (Auth::check()){
        Wishlist::insert([
            'user_id' => Auth::id(),
            'livro_id' => $livro_id,
        ]);
        return Redirect::route('desejos');
    }else{
        return Redirect::route('register');
    } 
    }
}
