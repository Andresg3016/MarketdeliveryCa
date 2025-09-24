<?php

namespace Database\Seeders;  // <-- Esta línea es necesaria

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductosFijosSeeder extends Seeder
{
    public function run()
    {
        $productosFijos = [
            // Tecnología
            ['nombre' => 'Auriculares Bluetooth', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 90000],
            ['nombre' => 'Mouse Inalámbrico', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 60000],
            ['nombre' => 'Teclado Mecánico', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 110000],
            ['nombre' => 'Smartwatch Deportivo', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 150000],
            ['nombre' => 'Cargador USB-C Rápido', 'color' => null, 'categoria' => 'tecnologia', 'precio' => 35000],

            // Hogar
            ['nombre' => 'Lámpara LED', 'color' => null, 'categoria' => 'hogar', 'precio' => 35000],
            ['nombre' => 'Olla a presión', 'color' => null, 'categoria' => 'hogar', 'precio' => 80000],
            ['nombre' => 'Termo de acero', 'color' => null, 'categoria' => 'hogar', 'precio' => 28000],
            ['nombre' => 'Set de vasos', 'color' => null, 'categoria' => 'hogar', 'precio' => 18000],
            ['nombre' => 'Almohada ortopédica', 'color' => null, 'categoria' => 'hogar', 'precio' => 45000],

            // Ropa
            ['nombre' => 'Camiseta Negra', 'color' => null, 'categoria' => 'ropa', 'precio' => 25000],
            ['nombre' => 'Zapatillas Deportivas', 'color' => null, 'categoria' => 'ropa', 'precio' => 60000],
        ];

        foreach ($productosFijos as $producto) {
            Producto::create($producto);
        }
    }
}
