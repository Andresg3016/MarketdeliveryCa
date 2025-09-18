<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rol
 * 
 * @property int $Id_Rol
 * @property string $Nombre_Rol
 * 
 * @property Collection|Usuario[] $usuarios
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	protected $primaryKey = 'Id_Rol';
	public $timestamps = false;

	protected $fillable = [
		'Nombre_Rol'
	];

	public function usuarios()
	{
		return $this->hasMany(Usuario::class, 'Rol_Id_Rol');
	}
}
