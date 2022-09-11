<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoMD extends Model
{
    protected $table = 'eventos';
    use HasFactory;
    protected $casts =['itens'=>'array'];
}
