<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    
    public function index(Request $request){
                 
        $clientes = Cliente::all(); //'array de productos'
        
        $op = $request->session()->get('op');
        $result = $request->session()->get('result');
        $error = $request->session()->get('error');
        $datos = [
                'clientes'=> $clientes
                ];
        if(isset($result)){
            $resultado = [
                    'destroy'=>[
                        0 => ['danger','EL borrado ha fallado'],
                        1 => ['success','El borrado ha sido un exito'],
                    ],
                    
                    'store'=>[
                        0 => ['danger','EL insertado ha fallado'],
                        1 => ['success','El insertado ha sido un exito'],
                    ],
                    
                    'update'=>[
                        0 => ['danger','EL editado ha fallado'],
                        1 => ['success','El editado ha sido un exito'],
                    ],
                    
            ];
            $datos += [
                'tipo'=>    $resultado[$op][$result][0],
                'mensaje'=> $resultado[$op][$result][1],
                ];
        }
        return view('clientes.index')->with($datos);
    }

    
    public function create()
    {
        return view('clientes.create');
    }

    
    public function store(ClienteRequest $request){
        $error = '';
        $input = $request->validated();//Array asociativo con los valores validados y limpios
        $cliente = new Cliente($input); //momento magico
        $cliente->ip=$request->ip();
        $result = $cliente->save();
        
        return redirect(route('cliente.index'))->with(['result'=>$result, 'op' => 'store', 'error'=> $error]);
    }

    
    public function show(Cliente $cliente)
    {
        return view('clientes.show')->with(['cliente'=> $cliente]);
    }

    
    public function edit(Cliente $cliente){
       return view('clientes.edit')->with(['cliente'=> $cliente]);
    }

    
    public function update(ClienteRequest $request, Cliente $cliente){
               
        $input = $request->validated();
        try{
             $result = $cliente->update($input);
        }catch(\Exception $e){
            $result = false;
            $error = ['nombre'=> 'El nombre utilizado ya existe en otro cliente'];
            return redirect('cliente/' . $cliente->id . 'edit/')->withErrors($error)->withInput() ;
        }
        
        return redirect(route('cliente.index'))->with(['result'=>$result,'op' => 'update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente){
          try{
            $cliente->delete();
            $result = true;
        }catch(\Exception $e){
            $result = false;
    }
    return redirect(route('cliente.index'))->with(['result'=>$result,'op' => 'destroy']);
        
    }
}
