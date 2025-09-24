<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $Id_Productos
 * @property string|null $Nombre
 * @property float|null $Valor_Unitario
 * @property string|null $Descripción
 * @property int|null $Stock
 * @property int|null $Catálogo_Id_Catálogo
 * @property int|null $Promoción_Id_Promoción
 * 
 * @property Promocion|null $promocion
 * @property Categorium|null $categorium
 * @property Collection|Carrito[] $carritos
 * @property Collection|DetalleFactura[] $detalle_facturas
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'Id_Productos';
	public $timestamps = false;

	protected $casts = [
		'Valor_Unitario' => 'float',
		'Stock' => 'int',
		'Catálogo_Id_Catálogo' => 'int',
		'Promoción_Id_Promoción' => 'int'
	];

	protected $fillable = [
		'Nombre',
		'Valor_Unitario',
		'Descripción',
		'Stock',
		'Catálogo_Id_Catálogo',
		'Promoción_Id_Promoción'
	];

	public function promocion()
	{
		return $this->belongsTo(Promocion::class, 'Promoción_Id_Promoción');
	}

	public function categorium()
	{
		return $this->belongsTo(Categorium::class, 'Id_Categoria');
	}

	public function carritos()
	{
		return $this->hasMany(Carrito::class, 'Producto_Id_Producto');
	}

	public function detalle_facturas()
	{
		return $this->hasMany(DetalleFactura::class, 'producto_id_producto');
	}
}
