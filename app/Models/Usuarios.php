<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table='usuarios';
    protected $primaryKey='idusuario';
    protected $fillable=
    [
    'nomusuario',
    'passusuario'
    ];
    use HasFactory;
    public $timestamps=false;
}
