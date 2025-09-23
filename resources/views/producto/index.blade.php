<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                <h1 class="text-2xl font-bold mb-6">Productos fijos</h1>

                <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">Nombre</th>
                            <th class="px-6 py-3">Color</th>
                            <th class="px-6 py-3">Categoría</th>
                            <th class="px-6 py-3">Precio</th>
                            <th class="px-6 py-3">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Auriculares Bluetooth</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">tecnologia</td>
                            <td class="px-6 py-4">$90.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Mouse Inalámbrico</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">tecnologia</td>
                            <td class="px-6 py-4">$60.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Teclado Mecánico</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">tecnologia</td>
                            <td class="px-6 py-4">$110.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Smartwatch Deportivo</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">tecnologia</td>
                            <td class="px-6 py-4">$150.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Cargador USB-C Rápido</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">tecnologia</td>
                            <td class="px-6 py-4">$35.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>

                        <!-- Categoría: hogar -->
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Lámpara LED</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">hogar</td>
                            <td class="px-6 py-4">$35.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Olla a presión</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">hogar</td>
                            <td class="px-6 py-4">$80.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Termo de acero</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">hogar</td>
                            <td class="px-6 py-4">$28.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Set de vasos</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">hogar</td>
                            <td class="px-6 py-4">$18.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Almohada ortopédica</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">hogar</td>
                            <td class="px-6 py-4">$45.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>

                        <!-- Categoría: ropa -->
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Camiseta Negra</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">ropa</td>
                            <td class="px-6 py-4">$25.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Zapatillas Deportivas</td>
                            <td class="px-6 py-4">-</td>
                            <td class="px-6 py-4">ropa</td>
                            <td class="px-6 py-4">$60.000</td>
                            <td class="px-6 py-4"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a></td>
                        </tr>
                    </tbody>
                </table>

                <h1 class="text-2xl font-bold mb-6">Productos dinámicos</h1>

                <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">Nombre</th>
                            <th class="px-6 py-3">Color</th>
                            <th class="px-6 py-3">Categoría</th>
                            <th class="px-6 py-3">Precio</th>
                            <th class="px-6 py-3">Acción</th>
                        </tr>
                    </thead>
<tbody>
    @foreach ($producto as $prod)
        <tr class="...">
            <td>{{ $prod->nombre }}</td>
            <td>{{ $prod->color ?? '-' }}</td>
            <td>{{ $prod->categorium->nombre ?? $prod->categoria }}</td>
            <td>${{ number_format($prod->precio, 0, ',', '.') }}</td>
            <td class="px-6 py-4 flex space-x-2">
                <a href="{{ route('producto.edit', $prod) }}" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                <form action="{{ route('producto.destroy', $prod) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline">Delete</button>
         </form>
</td>

        </tr>
    @endforeach
</tbody>

                </table>

            </div>
        </div>
    </div>
</x-app-layout>
