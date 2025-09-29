<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricoes extends Model
{
  use HasFactory;

  protected $table = 'inscricoes';
  protected $fillable = [
      'nome',
      'evento',
      'data_evento',
      'status'
  ];
}
