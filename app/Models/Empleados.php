<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $keyType = 'string'; // Define el tipo de la llave primaria como string
    protected $table='empleados';
    protected $primaryKey='Codempleado';
    protected $fillable=
    [
    'Nomempleado',
    'Apeempleado',
    'CodDepartamento',
    'Dirempleado'
    ];
    use HasFactory;
    public $timestamps=false;

}
