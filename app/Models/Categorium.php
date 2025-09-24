<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorium
 * 
 * @property int $Id_Categoria
 * @property string|null $Descripcion
 * 
 * @property Collection|Producto[] $productos
 * @property Collection|Servicio[] $servicios
 *
 * @package App\Models
 */
class Categorium extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'Id_Categoria';
    public $timestamps = false;

    protected $fillable = [
        'Descripcion'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'Id_Categoria');
    }

    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'Id_Categoria');
    }
}

