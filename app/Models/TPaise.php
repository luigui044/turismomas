<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TPaise
 * 
 * @property int $id_pais
 * @property string $cod_pais
 * @property string $des_pais
 *
 * @package App\Models
 */
class TPaise extends Model
{
	protected $table = 't_paises';
	protected $primaryKey = 'id_pais';
	public $timestamps = false;

	protected $fillable = [
		'cod_pais',
		'des_pais'
	];
}
