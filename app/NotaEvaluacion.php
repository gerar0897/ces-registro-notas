<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaEvaluacion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'NOTA_EVALUACION';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_NOTA_EVALUACION';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_EVALUACION', 'ID_NOTA_PERIODO', 'NOTA_EVALUACION'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
