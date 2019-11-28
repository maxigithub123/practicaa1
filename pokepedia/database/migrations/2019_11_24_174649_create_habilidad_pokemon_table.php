<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilidadPokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidad_pokemon', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger("idhabilidad")->unsigned();
            $table->bigInteger("idpokemon")->unsigned();
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idhabilidad')->references('id')->on('habilidads');
            $table->foreign('idpokemon')->references('id')->on('pokemon');
            $table->unique(['idhabilidad','idpokemon']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habilidad_pokemon');
    }
}
