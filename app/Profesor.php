<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'PROFESOR';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_PROFESOR';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_USUARIO', 'NOMBRE_PROFESOR', 'APELLIDO_PROFESOR', 'DUI', 'DIRECCION_PROFESOR', 'CELULAR_PROFESOR', 'ESPECIALIZACION'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
