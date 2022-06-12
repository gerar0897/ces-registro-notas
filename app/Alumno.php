<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ALUMNO';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_ALUMNO';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_GRADO', 'APELLLIDO_ALUMNO', 'NOMBRE_ALUMNO', 'DUI_TUTOR', 'DIRECCION_VIVIENDA', 'CELULAR_TUTOR', 'FECHA_NACIMIENTO_ALUMNO', 'EDAD_ALUMNO', 'NOMBRE_ALUMNO'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
