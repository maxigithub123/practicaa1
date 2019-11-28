<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentarios extends Model
{
     use SoftDeletes; //deleted_at
    
    protected $table = 'comentarios';
    

    
    protected $hidden = ['created_at','updated_at']; //sólo si hay campos que no se deben mostrar
    protected $fillable = ['id','idpost','iduser','texto']; //para definir los campos
    
    public function post() {
        return $this->belongsTo('App\Post', 'idpost');
    }
}
