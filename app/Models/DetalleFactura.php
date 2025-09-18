<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetalleFactura
 * 
 * @property int $id_detalle
 * @property int|null $factura_id_factura
 * @property int|null $producto_id_producto
 * @property int|null $cantidad
 * @property float|null $valor_venta_detalle
 * @property float|null $valor_total_detalle
 * 
 * @property Factura|null $factura
 * @property Producto|null $producto
 *
 * @package App\Models
 */
class DetalleFactura extends Model
{
	protected $table = 'detalle_factura';
	protected $primaryKey = 'id_detalle';
	public $timestamps = false;

	protected $casts = [
		'factura_id_factura' => 'int',
		'producto_id_producto' => 'int',
		'cantidad' => 'int',
		'valor_venta_detalle' => 'float',
		'valor_total_detalle' => 'float'
	];

	protected $fillable = [
		'factura_id_factura',
		'producto_id_producto',
		'cantidad',
		'valor_venta_detalle',
		'valor_total_detalle'
	];

	public function factura()
	{
		return $this->belongsTo(Factura::class, 'factura_id_factura');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'producto_id_producto');
	}
}
