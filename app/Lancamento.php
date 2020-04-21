<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
    public $timestamps= false;

    protected $table= 'lancamentos';

    protected $fillable = [
        'data',
        'valor',
    ];
}
