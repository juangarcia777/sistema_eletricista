<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    public $timestamps= false;

    protected $table= 'servicos';

    protected $fillable = [
        'id_cliente',
        'data_inicio',
        'data_fim',
        'valor',
        'status',
        'materiais',
    ];
}
