<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Pokemon;
use App\Habilidad;
use App\HabilidadPokemon;
use App\Post;
use App\User;
use App\Comentarios;
use Illuminate\Http\Request;
use App\Http\Requests\PokemonRequest;


class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pokemones = Pokemon::all(); //'array de pokemones'
        $habilidades = Habilidad::all(); //'array de habilidades'
        $posts = Post::all(); //'array de pokemones'
        $comentarios = Comentarios::all(); //'array de habilidades'
        
        
        return view('indexInicio')->with(['pokemones' => $pokemones,'habilidades' => $habilidades,'posts' => $posts,'comentarios' => $comentarios]);
    }
    
    function main(){
        if(Auth::check()){
            $datos = ['dato' => 'OK'];
        }else{
             $datos = ['dato' => 'KO'];
        }
        
        $pokemones = Pokemon::all(); //'array de pokemones'
        $habilidades = Habilidad::all(); //'array de habilidades'
        $habilidades2 = HabilidadPokemon::all(); //'array de de array habilidades'
        $posts = Post::all(); //'array de pokemones'
        $comentarios = Comentarios::all(); //'array de habilidades'
        
        $name = Auth::user()->name;
        
        $datos2 = ['pokemones' => $pokemones,'habilidades' => $habilidades,'posts' => $posts,'comentarios' => $comentarios,'habilidades2' => $habilidades2,'name'=>$name];
        
        
        
        
        return view('home')->with($datos2);
    }

    
    public function create()
    {
        $pokemones = Pokemon::all();
        
        return view('create')->with(['pokemones' => $pokemones]);
    }

    
    public function store(PokemonRequest $request)
    {
        $input = $request->validated();
        $pokemon = new Pokemon($input);
    
        try{
            $result = $pokemon->save();
        }catch(\Exception $e){
             return redirect(route('create'))->withInput();
        }
        return redirect(route('home'));
    }

    
    public function show(Pokemon $pokemon)
    {
        
        return view('show')->with(['pokemon'=> $pokemon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        return view('edit')->with(['pokemon'=> $pokemon]);
    }

    
    public function update(PokemonRequest $request, Pokemon $pokemon)
    {
       $input = $request->validated();
        try{
             $result = $pokemon->update($input);
        }catch(\Exception $e){
            $result = false;
            $error = ['nombre'=> 'El nombre utilizado ya existe en otro cliente'];
            return redirect('cliente/' . $pokemon->id . 'edit/')->withErrors($error)->withInput() ;
        }
        
        return redirect(route('home'))->with(['result'=>$result,'op' => 'update']);
    }

    
    public function destroy(Pokemon $pokemon){
          try{
            $pokemon->delete();
            $result = true;
        }catch(\Exception $e){
            $result = false;
    }
    return redirect(route('home'))->with(['result'=>$result,'op' => 'destroy']);
        
    }
}
