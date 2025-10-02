<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Producto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding:16px">
                    <p>
                        <a href="{{ route('producto.create') }}">Nuevo</a>
                    </p>

                    @if (session('ok'))
                        <p style="color:green">{{ session('ok') }}</p>
                    @endif

                    <table id="producto" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id_productos</th>                       
                                <th>Nombre</th>
                                <th>Valor_Unitario</th>
                                <th>Descripción</th>
                                <th>Stock</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                            @foreach ($producto as $prod)
                                <tr>
                                    <td>{{ $prod->Id_Productos }}</td>
                                    <td>{{ $prod->Nombre }}</td>
                                    <td>{{ $prod->Valor_Unitario }}</td>
                                    <td>{{ $prod->Descripción }}</td>
                                    <td>{{ $prod->Stock }}</td>      
                                          <td>
                    <!-- Botón Editar -->
                    <a href="{{ route('producto.edit', $prod->Id_Productos) }}" 
                       class="btn btn-sm btn-primary">
                        Editar
                    </a>

                    <!-- Botón Eliminar -->
                    <form action="{{ route('producto.destroy', $prod->Id_Productos) }}" 
                          method="POST" 
                          style="display:inline"
                          onsubmit="return confirm('¿Seguro que deseas eliminar este producto?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            Eliminar
                        </button>
                    </form>
                </td>                                                                
                                    
                                </tr>
                            @endforeach
                              <script src="{{ asset('js/datatable.js') }}"></script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- jQuery + DataTables (CDN) --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    
    <script>
        $(function() {
            $('#producto').DataTable({
                pageLength: 20,
                dom: 'Bfrtip',
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                },
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
</x-app-layout>