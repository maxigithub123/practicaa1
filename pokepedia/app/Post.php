<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
     use SoftDeletes; //deleted_at
    
    protected $table = 'posts';
    

    
    protected $hidden = ['created_at','updated_at']; //sólo si hay campos que no se deben mostrar
    protected $fillable = ['id','tema','texto','idpokemon','iduser',]; //para definir los campos
    
    public function pokemon() {
        return $this->belongsTo('App\Pokemon', 'idpokemon');
    }
    
    public function comentarios() {
        return $this->hasMany('App\Comentarios');
    }
    
   
}
