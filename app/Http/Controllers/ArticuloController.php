<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Articulo;
use App\Http\Requests\ArticuloRequest;

class ArticuloController extends Controller
{
    //

    public function index()
    {
        
        $articulos = Articulo::orderBy('id','ASC')->paginate();
        return view('articulos.index',compact('articulos'));
        
    }

    public function edit($id){
        $articulo = Articulo::find($id);
        return view('articulos.edit', compact('articulo'));
    }

    public function store(ArticuloRequest $request){
        $articulo = new Articulo;

        $articulo->nombre_articulo = $request->nombre_articulo;
        $articulo->descripcion_articulo = $request->descripcion_articulo;
        $articulo->existencia_articulo = $request->existencia_articulo;

        $articulo->save();
        return redirect()->route('articulos.index')
                        ->with('info','El articulo fue guardado');
    }

    public function update(ArticuloRequest $request, $id){
        $articulo = Articulo::find($id);

        $articulo->nombre_articulo = $request->nombre_articulo;
        $articulo->descripcion_articulo = $request->descripcion_articulo;
        $articulo->existencia_articulo = $request->existencia_articulo;

        $articulo->save();
        return redirect()->route('articulos.index')
                        ->with('info','El articulo fue ectualizado');
    }

    public function create(){
        return view('articulos.create');
    }

    public function destroy($id)
    {
        //
        $articulo = Articulo::find($id);
        $articulo->delete();
        
        return back()->with('info', 'El articulo fue eliminado');
    } 
}
