<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use Session;
Use Redirect;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['usuarios']=Usuario::paginate(5);
        return view('usuarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosUsuarios = request()->except('_token');


        if($request->hasFile('Foto')){
            $datosUsuarios['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Usuario::insert($datosUsuarios);
       // return response()->json($datosUsuarios);
       return redirect('usuarios')->with('mensaje','Usuario agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario=Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosUsuarios = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $usuario=Usuario::findOrFail($id);

            Storage::delete('public/'.$usuario->Foto);

            $datosUsuarios['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Usuario::where('id','=',$id)->update($datosUsuarios);
        $usuario=Usuario::findOrFail($id);
        Session::flash('message','Usuario editado');
        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $usuario=Usuario::findOrFail($id);

        if(Storage::delete('public/'.$usuario->Foto)){
            Usuario::destroy($id);
        }
        
        return redirect('usuarios')->with('mensaje','Usuario borrado');
    }
}
