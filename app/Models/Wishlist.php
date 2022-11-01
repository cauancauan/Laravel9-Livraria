<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlists';
    protected $fillable = [
        'user_id'.
        'livro_id'
    ];

    public function livros():BelongsTo{
        return $this->belongsTo(Livros::class, 'livro_id', 'id');
    }
}
