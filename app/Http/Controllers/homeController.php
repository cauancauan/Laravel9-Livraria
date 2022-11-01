<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class homeController extends Controller
{
    public function mostrarHome(){
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
$livros= Livros::all();
$wishlistcount = Wishlist::count();
$categoriaRomance = Livros::where('categoria', 'Romance');
            

     
        return view ('home', ['livros' => $livros, 'wishlistcount'=>$wishlistcount], compact ('wishlist'), compact('categoriaRomance') );



    }

    public function searchProducts(Request $request){

        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        $livros= Livros::all();
        $wishlistcount = Wishlist::count();
        if($request->search){
            $searchProducts = Livros::where('nome', 'LIKE', '%'.$request->search.'%')
            ->orWhere('autor', 'LIKE', '%'.$request->search.'%')
            ->orWhere('paginas', 'LIKE', '%'.$request->search.'%')
            ->orWhere('edicao', 'LIKE', '%'.$request->search.'%')
            ->orWhere('editora', 'LIKE', '%'.$request->search.'%')
            ->orWhere('categoria', 'LIKE', '%'.$request->search.'%')
            ->orWhere('valor', 'LIKE', '%'.$request->search.'%')
        
            
            ->paginate(15); 
            return view('search', compact('searchProducts'), ['livros' => $livros, 'wishlistcount'=>$wishlistcount], compact ('wishlist'));
        } else{
            return redirect()->back();
        }
    }

 


}
