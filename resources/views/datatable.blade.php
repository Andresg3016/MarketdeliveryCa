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

    <style>
    /* Tabla */
    #producto {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
        font-family: 'Segoe UI', sans-serif;
    }

    #producto thead {
        background-color: #000000;
        color: #f5bd27;
        text-align: center;
    }

    #producto th, 
    #producto td {
        padding: 0.8rem;
        border: 1px solid #ddd;
        text-align: center;
    }

    #producto tbody tr:nth-child(even) {
        background-color: #fff9db; /* Amarillo claro */
    }

    #producto tbody tr:hover {
        background-color: #fcd56b; /* Amarillo más fuerte */
    }

    /* Botones de acciones */
    .btn {
        display: inline-block;
        padding: 0.4rem 0.8rem;
        border-radius: 6px;
        font-size: 0.9rem;
        font-weight: bold;
        text-decoration: none;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #000000;
        color: #f5bd27;
        border: none;
    }
    .btn-primary:hover {
        background-color: #333333;
    }

    .btn-danger {
        background-color: #f5bd27;
        color: #000000;
        border: none;
    }
    .btn-danger:hover {
        background-color: #e6ab1f;
    }

    /* DataTables: buscador y paginación */
    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #ccc;
        padding: 0.4rem;
        border-radius: 5px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        background: #000000;
        color: #f5bd27 !important;
        border-radius: 5px;
        padding: 0.4rem 0.8rem;
        margin: 0 2px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #f5bd27 !important;
        color: #000000 !important;
    }

    /* Botones de exportación */
    .dt-button {
        background-color: #000000 !important;
        color: #f5bd27 !important;
        border: none !important;
        border-radius: 6px !important;
        padding: 0.5rem 1rem !important;
        font-weight: bold;
        margin: 0 5px;
    }

    .dt-button:hover {
        background-color: #333333 !important;
        color: #fcd56b !important;
    }
    /* Navbar Custom */
.navbar-link {
  background-color: #000000;
  color: #f5bd27 !important;
  padding: 0.5rem 1rem;
  border-radius: 6px;
  font-weight: bold;
  transition: 0.3s ease;
}

.navbar-link:hover {
  background-color: #f5bd27;
  color: #000000 !important;
}

</style>

</x-app-layout>