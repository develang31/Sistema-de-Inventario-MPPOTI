<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
	protected $table="cargos";
	protected $fillable=['nombre_cargo','codigo_cargo'];
	protected $primaryKey='id_cargo';
	public $timestamps =false;
}
