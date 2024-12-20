<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $empleados=Empleados::all();

       return response()->json($empleados);
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
        $empleado= new Empleados();
        $empleado->Codempleado=$request->Codempleado;
        $empleado->Nomempleado=$request->Nomempleado;
        $empleado->Apeempleado=$request->Apeempleado;
        $empleado->CodDepartamento=$request->CodDepartamento;
        $empleado->Dirempleado=$request->Dirempleado;

        $empleado->save();

        return response()->json($empleado,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado= Empleados::findOrFail($id);
        return response()->json($empleado,200);
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
            $empleado= Empleados::findOrFail($id);
            $empleado->Nomempleado=$request->Nomempleado;
            $empleado->Apeempleado=$request->Apeempleado;
            $empleado->CodDepartamento=$request->CodDepartamento;
            $empleado->Dirempleado=$request->Dirempleado;
            $empleado->save();
            return response()->json($empleado,200);
        }catch(ModelNotFoundException $ex){
            return response()->json($ex,500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado= Empleados::findOrFail($id);
        $empleado->delete();
       return 204;
    }
}
