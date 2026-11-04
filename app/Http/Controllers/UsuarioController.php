<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //LISTAR
        $todos = Usuario::all();
        return view('usuario.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        $nuevo = new Usuario;
        $datos= $request->all();
        $datos['clave']=Hash::make($datos['clave']);
        $nuevo->fill($datos);
        $nuevo->save();
        return redirect(route('usuarios.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        dump($usuario->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $datos= $request->all();
        $datos['clave']=Hash::make($datos['clave']);
        $usuario->fill($datos);
        $usuario->save();
        return redirect(route('usuarios.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect(route('usuarios.index'));

    }
}
