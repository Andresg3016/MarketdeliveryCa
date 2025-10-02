<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Producto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('producto.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="Nombre" class="block text-gray-700">Nombre</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-input w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="Valor_Unitario" class="block text-gray-700">Valor Unitario</label>
                        <input type="number" name="Valor_Unitario" id="Valor_Unitario" class="form-input w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="Descripción" class="block text-gray-700">Descripción</label>
                        <textarea name="Descripción" id="Descripción" class="form-input w-full"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="Stock" class="block text-gray-700">Stock</label>
                        <input type="number" name="Stock" id="Stock" class="form-input w-full" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('datatable') }}" class="btn btn-secondary" style="margin-left:10px;">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>