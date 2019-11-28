<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
           'nombre'=>   "required|min:3|max:50",
            'apellidos'=>   "required|min:3|max:50",
            'fechaNac'=>   "required|date",
            'email'=>   "required|email",
            'clave'=>   "required|min:3|max:50",
            'telefono'=>  "numeric",
            'direccion'=>  "nullable",
            'ip'=>  "nullable",
            'estadocivil'=>  "nullable",
            'sueldo'=>  "numeric|gte:0|lte:10000",
        ];
    }
    
            public function messages(){
            $required = "El campo :attribute es obligatorio";
            $unique = "El campo :attribute ya existe en otro registro, cambielo";
            $min = "La longitud minima del campo :attribute es :min";
            $max = "La longitud minima del campo :attribute es :min";
            $date = "El valor :attribute no es un formato valido de fecha,el valido es aaaa/mm/dd";
            $email = "El valor :attribute no es un formato correcto de email";
            $numeric = "El valor del campo :attribute debe ser numerico";
            $gte = "El valor del campo :attribute debe ser mayor o igual que 0";
            $lte = "El valor del campo :attribute debe ser mayor que 1";
            $lte2 = "El valor del campo :attribute debe ser menor que 10000";
            $estado = "El valor del campo :attribute debe ser casado o soltero";
        return [
            
            'nombre.required'=>$required,
            'nombre.min'=>$min,
            'nombre.max'=>$max,
            
            
            'apellidos.required'=>$required,
            'apellidos.min'=>$min,
            'apellidos.max'=>$max,
            
            'fechaNac.required'=>$required,
            'fechaNac.date' => $date,
            
            'email.required'=>$required,
            'email.email' => $email,
            
            'clave.required'=>$required,
            'clave.min'=>$min,
            'clave.max'=>$max,
            
            'estadocivil'=> $estado,
            
            'sueldo.numeric'=>$numeric,
            'sueldo.gte'=>$gte,
            'sueldo.lte'=>$lte2,
            
        
            ];
    }
}
