<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public $timestamps= false;

    protected $table= 'agendas';

    protected $fillable = [
        'cliente',
        'endereco',
        'telefone',
        'horario',
        'data'
    ];
}
