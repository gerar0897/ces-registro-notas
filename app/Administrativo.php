<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ADMINISTRATIVO';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_ADMINISTRATIVO';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['NOMBRE_ADMINIS', 'ID_USUARIO' ,'APELLIDO_ADMINIS', 'DUI_ADMINIS', 'CARGO', 'CELULAR_ADMINIS'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
