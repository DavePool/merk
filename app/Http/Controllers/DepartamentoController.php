<?php

namespace App\Http\Controllers;
use App\departamento;
use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoRequest;

class DepartamentoController extends Controller
{
    public function index(){
        $departamentos = departamento::orderBy('id','ACS')->paginate();
        return view('departamentos.index', compact('departamentos'));
    }

    public function create(){
        return view('departamentos.create');
    }

    public function store(DepartamentoRequest $request){
        $departamento = new departamento;

        $departamento->nombre_departamento = $request->nombre_departamento;
        $departamento->encargado_departamento = $request->encargado_departamento;
        $departamento->extension_departamento = $request->extension_departamento;
        $departamento->rol_departamento = $request->rol_departamento;
        $departamento->password_departamento = $request->password_departamento;

        $departamento->save();
        return redirect()->route('departamentos.index')
                        ->with('info','El Departamento Fue Guardado');
    }

    public function update(DepartamentoRequest $request, $id){
        $departamento = departamento::find($id);

        $departamento->nombre_articulo = $request->nombre_articulo;
        $departamento->descripcion_articulo = $request->descripcion_articulo;
        $departamento->existencia_articulo = $request->existencia_articulo;

        $departamento->save();
        return redirect()->route('departamentos.index')
                        ->with('info','El Departamento Fue Actualizado');
    }

    public function destroy($id)
    {
        //
        $departamento = departamento::find($id);
        $departamento->delete();
        
        return back()->with('info', 'El Depertamento fue eliminado');
    } 
}
