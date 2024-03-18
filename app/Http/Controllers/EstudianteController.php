<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listado['estudiante'] = estudiante::paginate(5);
        return view('estudiante.index', $listado);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosest = request()->except('_token');
        if ($request->hasFile('foto')){
            $datosest['foto']=$request->file('foto')->store('uploads', 'public');
            }
        estudiante::insert($datosest);
     //   return response()->json($datosest);
    return redirect('estudiante')->with('mensaje','Registro ingresado con exito');
    }

    
    /**
     * Display the specified resource.
     */
    public function show(estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $up_est = estudiante::findOrFail($id);
        return view('estudiante.update', compact('up_est'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
        {
        $dato = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $dato['foto']=$request->file('foto')->store('uploads','public');
        }
        estudiante::where('id','=',$id)->update($dato);

        $up_est = estudiante::findOrFail($id);
        return view('estudiante.update', compact('up_est'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $estudiante = estudiante::findOrfail($id);

     if(Storage::delete('public/'.$estudiante->foto)){
        estudiante::destroy($id);
     }
     return redirect('estudiante')->with('mensaje','Registro eliminado exitosamente');   

    }
}
