<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 * 
 * @property int $id_empresa
 * @property string $nombre
 * @property string $telefono
 * @property string|null $email
 *
 * @package App\Models
 */
class Empresa extends Model
{
	protected $table = 'empresas';
	protected $primaryKey = 'id_empresa';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'telefono',
		'email'
	];
}
