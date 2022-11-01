<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table){
            $table -> id();
            $table -> string ('nome');
            $table -> string ('autor');
            $table -> string ('paginas');
            $table -> string ('edicao');
            $table -> string ('valor');
            $table -> string ('editora');
            $table -> string ('categoria');
            $table -> string ('user_id');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
};
