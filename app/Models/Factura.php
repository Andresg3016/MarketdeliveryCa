<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $Id_Factura
 * @property int|null $Usuario_Id_Usuario
 * @property int|null $Servicio_Id_Servicio
 * @property string|null $Descripción
 * @property float|null $Iva
 * @property float|null $Valor_Total
 * 
 * @property Servicio|null $servicio
 * @property Usuario|null $usuario
 * @property Collection|DetalleFactura[] $detalle_facturas
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'factura';
	protected $primaryKey = 'Id_Factura';
	public $timestamps = false;

	protected $casts = [
		'Usuario_Id_Usuario' => 'int',
		'Servicio_Id_Servicio' => 'int',
		'Iva' => 'float',
		'Valor_Total' => 'float'
	];

	protected $fillable = [
		'Usuario_Id_Usuario',
		'Servicio_Id_Servicio',
		'Descripción',
		'Iva',
		'Valor_Total'
	];

	public function servicio()
	{
		return $this->belongsTo(Servicio::class, 'Servicio_Id_Servicio');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuario_Id_Usuario');
	}

	public function detalle_facturas()
	{
		return $this->hasMany(DetalleFactura::class, 'factura_id_factura');
	}
}
