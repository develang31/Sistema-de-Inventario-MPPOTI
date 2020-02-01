<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table="servicios";
    protected $fillable=['nombre_servicio'];
    protected $primaryKey='id_servicio';
    public $timestamps =false;
}
