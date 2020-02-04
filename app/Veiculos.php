<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'veiculos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['veiculo','marca','ano','descricao','vendido'];
}
