<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agenda
 * 
 * @property int $Id_Agenda
 * @property Carbon|null $Desponibilidad
 * 
 * @property Collection|Servicio[] $servicios
 *
 * @package App\Models
 */
class Agenda extends Model
{
	protected $table = 'agenda';
	protected $primaryKey = 'Id_Agenda';
	public $timestamps = false;

	protected $casts = [
		'Desponibilidad' => 'datetime'
	];

	protected $fillable = [
		'Desponibilidad'
	];

	public function servicios()
	{
		return $this->hasMany(Servicio::class, 'Agenda_Id_Agenda');
	}
}
