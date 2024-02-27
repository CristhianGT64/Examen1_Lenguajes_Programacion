<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vuelosAsiento extends Model
{
    use HasFactory;
    protected $primaryKey = "idTipoVuelo";
    public $timestamps = false;
}
