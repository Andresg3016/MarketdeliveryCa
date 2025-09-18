<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrito
 * 
 * @property int $Id_Carrito
 * @property int|null $Producto_Id_Producto
 * @property int|null $Servicio_Id_Servicio
 * @property int|null $Total
 * 
 * @property Servicio|null $servicio
 * @property Producto|null $producto
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Carrito extends Model
{
	protected $table = 'carrito';
	protected $primaryKey = 'Id_Carrito';
	public $timestamps = false;

	protected $casts = [
		'Producto_Id_Producto' => 'int',
		'Servicio_Id_Servicio' => 'int',
		'Total' => 'int'
	];

	protected $fillable = [
		'Producto_Id_Producto',
		'Servicio_Id_Servicio',
		'Total'
	];

	public function servicio()
	{
		return $this->belongsTo(Servicio::class, 'Servicio_Id_Servicio');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'Producto_Id_Producto');
	}

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'Carrito_Id_Carrito');
	}
}
