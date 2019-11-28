<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pokemon extends Model
{
    use SoftDeletes; //deleted_at
    
    protected $table = 'pokemon';
    
    protected $hidden = ['created_at','updated_at']; //sólo si hay campos que no se deben mostrar
    protected $fillable = ['id','nombre','peso','estatura',]; //para definir los campos
    
    public function posts() {
        return $this->hasMany('App\Post');
    }
    
    public function habilidades() {
        return $this->hasMany('App\HabilidadPokemon');
    }
}
