<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaFinal extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'NOTA_FINAL';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_NOTA_FINAL';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_ANO', 'VALOR_'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
