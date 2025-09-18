<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 * 
 * @property int $Id_Servicios
 * @property string|null $Descripción
 * @property int|null $Agenda_Id_Agenda
 * @property int|null $Catálogo_Id_Catálogo
 * 
 * @property Categorium|null $categorium
 * @property Agenda|null $agenda
 * @property Collection|Carrito[] $carritos
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class Servicio extends Model
{
	protected $table = 'servicios';
	protected $primaryKey = 'Id_Servicios';
	public $timestamps = false;

	protected $casts = [
		'Agenda_Id_Agenda' => 'int',
		'Catálogo_Id_Catálogo' => 'int'
	];

	protected $fillable = [
		'Descripción',
		'Agenda_Id_Agenda',
		'Catálogo_Id_Catálogo'
	];

	public function categorium()
	{
		return $this->belongsTo(Categorium::class, 'Catálogo_Id_Catálogo');
	}

	public function agenda()
	{
		return $this->belongsTo(Agenda::class, 'Agenda_Id_Agenda');
	}

	public function carritos()
	{
		return $this->hasMany(Carrito::class, 'Servicio_Id_Servicio');
	}

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'Servicio_Id_Servicio');
	}
}
