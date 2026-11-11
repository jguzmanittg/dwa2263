<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Mesa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesa.listado',compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $aulas = Aula::all();
        return view('mesa.agregar',compact('aulas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        dump($request->input('inventario'));

        $nueva = new Mesa();
        $nueva->inventario = $request->input('inventario') ;
        $nueva->inventario = $datos['inventario'] ;
        $nueva->aula_id = $datos['aula_id'] ;
        $nueva->save();
        Log::channel('bitacora')->warning( Auth::user()->nombre . " agregó una mesa -  " . Carbon::now());

        return redirect(route('mesas.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesa $mesa)
    {
        dump($mesa->created_at);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesa $mesa)
    {

        return view('mesa.editar',compact('mesa'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesa $mesa)
    {
        $mesa->inventario = $request->input('inventario');
        $mesa->save();
        return redirect(route('mesas.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesa $mesa)
    {
        if(Gate::allows('delete',$mesa)){
            $mesa->delete();
            return redirect(route('mesas.index'));
        }else{
            return "NO PUEDES";

        }
    }
}
