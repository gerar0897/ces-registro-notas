<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'EVALUACION';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_EVALUACION';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_MATERIA', 'ID_NOTA_EVALUACION', 'ID_ALUMNO', 'ID_EVALUACION', 'PORCENTAJE'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
