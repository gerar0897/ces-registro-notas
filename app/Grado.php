<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'GRADO';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_GRADO';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_ANO', 'NOMBRE_GRADO', 'SECCION'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
