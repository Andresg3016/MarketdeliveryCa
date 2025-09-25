<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <form method="POST" action="{{ route('producto.update', $producto->Id_Productos) }}">
                    @csrf
                    @method('PUT')

                    <div>
                        <label>Nombre</label>
                        <input type="text" name="Nombre" value="{{ $producto->Nombre }}" class="border p-2 w-full">
                    </div>

                    <div>
                        <label>Valor Unitario</label>
                        <input type="number" name="Valor_Unitario" value="{{ $producto->Valor_Unitario }}" class="border p-2 w-full">
                    </div>

                    <div>
                        <label>Descripción</label>
                        <input type="text" name="Descripción" value="{{ $producto->Descripción }}" class="border p-2 w-full">
                    </div>

                    <div>
                        <label>Stock</label>
                        <input type="number" name="Stock" value="{{ $producto->Stock }}" class="border p-2 w-full">
                    </div>

                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded mt-4">
                        Guardar Cambios
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
