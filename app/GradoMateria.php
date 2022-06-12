<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradoMateria extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'GRADO_MATERIA';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    // protected $primaryKey = 'ID_PROFESOR';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_GRADO', 'ID_MATERIA'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
