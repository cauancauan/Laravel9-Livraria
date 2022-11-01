<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class Livros extends Model
{
    use HasFactory;

    protected $fillabe = [
        'nome', 'autor', 'paginas', 'edicao', 'valor', 'editora', 'categoria', 'user_id', 'image'
    ];

    protected $table ="livros";
    public $timestamps = false;

    public function user(){
        return $this -> belongsTo('App\Model\User');
    }
}


