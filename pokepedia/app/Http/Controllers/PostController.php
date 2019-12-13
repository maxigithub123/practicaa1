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
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    
    public function index()
    {
         $pokemones = Pokemon::all(); //'array de pokemones'
        $habilidades = Habilidad::all(); //'array de habilidades'
        $habilidades2 = HabilidadPokemon::all(); //'array de habilidades asociadas'
        $posts = Post::all(); //'array de pokemones'
        $comentarios = Comentarios::all(); //'array de habilidades'
        $datos= ['pokemones' => $pokemones,'habilidades' => $habilidades,'habilidades2' => $habilidades2,'posts' => $posts,'comentarios' => $comentarios];
        
        
        return view('indexPost')->with($datos);
    }

    
    public function create(){
         $post = Post::all();
         $user = User::all();
         $pokemones = Pokemon::all();
         $datos = ['post' => $post,'pokemones'=> $pokemones,'users'=> $user];
        
        return view('createPost')->with($datos);
    }

   
    public function store(PostRequest $request){
        
        $input = $request->validated();
        $post = new Post($input);
        
       
        $result = $post->save();
        
        
        return redirect(route('indexPost'));
    }

    
    public function show(Post $post){
        
    }

    
    public function edit(Post $post){
        
    }

    
    public function update(Request $request, Post $post){
        
    }

    
    public function destroy(Post $post){
        
    }
}
