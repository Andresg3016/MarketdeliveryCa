<?php

namespace Database\Seeders;  // <-- Esta línea es necesaria

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosFijosSeeder extends Seeder
{
    public function run()
    {
        $productosFijos = [
            ['nombre' => 'Auriculares Bluetooth', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 90000],
            ['nombre' => 'Mouse Inalámbrico', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 60000],
            ['nombre' => 'Teclado Mecánico', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 110000],
            ['nombre' => 'Smartwatch Deportivo', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 150000],
            ['nombre' => 'Cargador USB-C Rápido', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 35000],
            // Agrega los demás productos fijos igual
        ];

        foreach ($productosFijos as $producto) {
            Producto::create($producto);
        }
    }
}
