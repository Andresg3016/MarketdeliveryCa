<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Promocion
 * 
 * @property int $Id_Promocion
 * @property string|null $Descripción
 * @property int|null $Procentaje_Descuento
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Promocion extends Model
{
	protected $table = 'promocion';
	protected $primaryKey = 'Id_Promocion';
	public $timestamps = false;

	protected $casts = [
		'Procentaje_Descuento' => 'int'
	];

	protected $fillable = [
		'Descripción',
		'Procentaje_Descuento'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'Promoción_Id_Promoción');
	}
}
