<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pqr
 * 
 * @property int $ID_Pqr
 * @property string|null $Descripción_Pqr
 * @property int|null $Usuario_Id_Usuario
 * 
 * @property Usuario|null $usuario
 *
 * @package App\Models
 */
class Pqr extends Model
{
	protected $table = 'pqr';
	protected $primaryKey = 'ID_Pqr';
	public $timestamps = false;

	protected $casts = [
		'Usuario_Id_Usuario' => 'int'
	];

	protected $fillable = [
		'Descripción_Pqr',
		'Usuario_Id_Usuario'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'Usuario_Id_Usuario');
	}
}
