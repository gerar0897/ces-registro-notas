<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'PERIODO';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_PERIODO';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_GRADO', 'FECHA_PERIODO_INICIO','FECHA_PERIODO_FIN', 'NOMBRE_PERIODO'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
