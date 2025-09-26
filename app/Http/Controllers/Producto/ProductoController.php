<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Mostrar listado de productos (DataTable).
     */
    public function index()
    {
        $producto = Producto::with(['promocion', 'categorium'])
            ->orderBy('Id_Productos', 'asc')
            ->get();

        return view('producto.index', compact('producto'));
    }

    /**
     * Mostrar formulario de creación.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Guardar un producto nuevo.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre'        => 'required|string|max:255',
            'Valor_Unitario'=> 'required|numeric|min:0',
            'Descripción'   => 'nullable|string',
            'Stock'         => 'required|integer|min:0',
        ]);

        Producto::create([
            'Nombre'         => $request->input('Nombre'),
            'Valor_Unitario' => $request->input('Valor_Unitario'),
            'Descripción'    => $request->input('Descripción'),
            'Stock'          => $request->input('Stock'),
        ]);

        return redirect()->route('producto.index')->with('ok', 'Producto creado con éxito');
    }

    /**
     * Mostrar un producto específico.
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.show', compact('producto'));
    }

    /**
     * Mostrar formulario de edición.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Actualizar un producto en BD.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre'        => 'required|string|max:255',
            'Valor_Unitario'=> 'required|numeric|min:0',
            'Descripción'   => 'nullable|string',
            'Stock'         => 'required|integer|min:0',
        ]);

        $producto = Producto::findOrFail($id);

        $producto->Nombre        = $request->input('Nombre');
        $producto->Valor_Unitario= $request->input('Valor_Unitario');
        $producto->Descripción   = $request->input('Descripción');
        $producto->Stock         = $request->input('Stock');

        $producto->save();

        return redirect()->route('producto.index')->with('ok', 'Producto actualizado con éxito');
    }

    /**
     * Eliminar un producto.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto.index')->with('ok', 'Producto eliminado correctamente');
    }
}
