<?php

namespace transtruck\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'rg'
    ];
}
