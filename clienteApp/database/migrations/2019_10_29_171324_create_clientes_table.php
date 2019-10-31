<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->charset = "utf8";
            $table->collation = "utf8_unicode_ci";
            
            
            
            $table->bigIncrements('id');
            $table->string("nombre",50);
            $table->string("apellidos",50);
            $table->date("fechaNac");
            $table->string("email",50);
            $table->string("clave",50);
            $table->string("telefono",50);
            $table->string("direccion",50);
            $table->string("ip");
            $table->string("estadocivil",50);
            $table->string("sueldo");
            
            
            $table->timestamps();
            $table->softDeletes();
            
            
            
            $table->unique(['nombre','apellidos','fechaNac']);
            $table->unique(['email']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
