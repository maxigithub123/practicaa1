<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre");
            $table->bigInteger("peso");
            $table->bigInteger("estatura");
            
            
            $table->timestamps();
            $table->softDeletes();
            
              $table->unique(['nombre']);
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('pokemon');
    }
}
