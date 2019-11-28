<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Habilidad extends Model
{
    use SoftDeletes; //deleted_at
    
    protected $table = 'habilidads';
    
    protected $hidden = ['created_at','updated_at']; //sólo si hay campos que no se deben mostrar
    protected $fillable = ['id','habilidad']; //para definir los campos
}
