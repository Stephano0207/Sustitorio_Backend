<?php

namespace App\Http\Controllers;

use App\Models\Departamentos;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $departamentos=Departamentos::all();

       return response()->json($departamentos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $departamento= new Departamentos();
        $departamento->Desdepartamento=$request->Desdepartamento;
        $departamento->save();

        return response()->json($departamento,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departamento= Departamentos::findOrFail($id);
        return response()->json($departamento,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $departamento= Departamentos::findOrFail($id);
            $departamento->Desdepartamento=$request->Desdepartamento;
            $departamento->save();
            return response()->json($departamento,200);
        }catch(ModelNotFoundException $ex){
            return response()->json($ex,500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departamento= Departamentos::findOrFail($id);
        $departamento->delete();
       return 204;
    }
}
