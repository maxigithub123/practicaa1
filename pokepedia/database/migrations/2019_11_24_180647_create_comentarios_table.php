<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger("idpost")->unsigned();
            $table->bigInteger("iduser")->unsigned();
            $table->string("texto",100);
            
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('idpost')->references('id')->on('posts');
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
        Schema::dropIfExists('comentarios');
    }
}
