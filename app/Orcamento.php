<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    public $timestamps= false;

    protected $table= 'orcamentos';

    protected $fillable = [
        'id_cliente',
        'data_orcamento',
        'valor',
    ];
}
