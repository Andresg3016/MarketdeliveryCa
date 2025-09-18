<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $Id_Usuario
 * @property string|null $Nombre1
 * @property string|null $Nombre2
 * @property string|null $Apellido1
 * @property string|null $Apellido2
 * @property string|null $Cedula
 * @property string|null $Email
 * @property int|null $Telefono
 * @property string|null $Direccion
 * @property int|null $Rol_Id_Rol
 * @property int|null $Carrito_Id_Carrito
 * 
 * @property Rol|null $rol
 * @property Carrito|null $carrito
 * @property Collection|Factura[] $facturas
 * @property Collection|Pqr[] $pqrs
 * @property Collection|Reseña[] $reseñas
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuario';
	protected $primaryKey = 'Id_Usuario';
	public $timestamps = false;

	protected $casts = [
		'Telefono' => 'int',
		'Rol_Id_Rol' => 'int',
		'Carrito_Id_Carrito' => 'int'
	];

	protected $fillable = [
		'Nombre1',
		'Nombre2',
		'Apellido1',
		'Apellido2',
		'Cedula',
		'Email',
		'Telefono',
		'Direccion',
		'Rol_Id_Rol',
		'Carrito_Id_Carrito'
	];

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'Rol_Id_Rol');
	}

	public function carrito()
	{
		return $this->belongsTo(Carrito::class, 'Carrito_Id_Carrito');
	}

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'Usuario_Id_Usuario');
	}

	public function pqrs()
	{
		return $this->hasMany(Pqr::class, 'Usuario_Id_Usuario');
	}

	public function reseñas()
	{
		return $this->hasMany(Reseña::class, 'Usuario_Id_Usuario');
	}
}
