<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'MATERIA';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_MATERIA';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_PERIODO', 'ID_PROFESOR', 'NOMBRE_MATERIA', 'CODIGO_MATERIA'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
