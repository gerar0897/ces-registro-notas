<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaPeriodo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'NOTA_PERIODO';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_NOTA_PERIODO';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_NOTA_FINAL', 'ID_PERIODO', 'NOTA_PERIODO', 'NOTA_CONDUCTA'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
