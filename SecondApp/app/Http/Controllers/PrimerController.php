<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller{
    
       public function primeravista(){
        return view('practica.index');
    }
    
       public function vistaLogin(){
        return view('practica.login');
    }
    
        public function vistaLoginHecho(){
        return view('practica.loginhecho');
    }
    
    
        public function forgotten(){
        return view('practica.forgotten');
    }
    
         public function forgottenHecho(){
        return view('practica.forgottenhecho');
    }
    
  
    
}
