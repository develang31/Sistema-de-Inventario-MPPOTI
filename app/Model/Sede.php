<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
   Protected $fillable =['nombre_sede'];
    Protected $primaryKey = 'id_sede';

    public $timestamps = false;
}
