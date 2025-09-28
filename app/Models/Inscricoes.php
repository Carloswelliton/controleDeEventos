<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscricoes extends Model
{
    protected $table = 'inscricoes';
    protected $fillable = [
        'nome',
        'evento',
        'data_evento',
        'status'
    ];
}
