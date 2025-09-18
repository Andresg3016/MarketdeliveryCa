<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reseña
 * 
 * @property int $Id_Reseñas
 * @property string|null $Detalles
 * @property int|null $Usuario_Id_Usuario
 * 
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class Reseña extends Model
{
	protected $table = 'reseñas';
	protected $primaryKey = 'Id_Reseñas';
	public $timestamps = false;

	protected $casts = [
		'Usuario_Id_Usuario' => 'int'
	];

	protected $fillable = [
		'Detalles',
		'Usuario_Id_Usuario'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuario_Id_Usuario');
	}
}
