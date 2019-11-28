<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonRequest extends FormRequest
{
     public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
             'nombre'=> "required",
             'peso' => "required|numeric",
             'estatura' => "required|numeric",
            
        ];
    }
}
