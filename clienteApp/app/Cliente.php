<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
     use SoftDeletes; //deleted_at
    
    protected $table = 'clientes';
    

    
    protected $hidden = ['created_at','updated_at']; //sólo si hay campos que no se deben mostrar
    protected $fillable = ['id','nombre','apellidos','fechaNac','email','clave','telefono','direccion','ip','estadocivil','sueldo',]; //para definir los campos
}
