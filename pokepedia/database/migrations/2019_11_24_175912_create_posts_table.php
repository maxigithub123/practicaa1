<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
             
            $table->bigIncrements('id');
            $table->string("tema");
            $table->string("texto",100);
            $table->bigInteger("idpokemon")->unsigned();
            $table->bigInteger("iduser")->unsigned();
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idpokemon')->references('id')->on('pokemon');
            $table->foreign('iduser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
