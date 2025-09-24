<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Producto::with(['promocion', 'categorium'] )
        ->orderBy('Id_Productos', 'asc')
        ->get();
       return view ('producto.index', compact('producto'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
{
    $producto = Producto::findOrFail($id);

    $producto->Nombre = $request->input('Nombre');
    $producto->Valor_Unitario = $request->input('Valor_Unitario');
    $producto->Descripción = $request->input('Descripción');
    $producto->Stock = $request->input('Stock');

    $producto->save();

    return redirect()->route('producto.index')->with('ok', 'Producto actualizado con éxito');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminar el producto
    $producto = Producto::findOrFail($id);
    $producto->delete();
    // Redirigir con mensaje de éxito
    return redirect()->route('producto.index')->with('ok', 'Producto eliminado correctamente.');
    }
}