<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table='departamentos';
    protected $primaryKey='CodDepartamento';
    protected $fillable=
    [
    'Desdepartamento'
    ];
    use HasFactory;
    public $timestamps=false;
}


