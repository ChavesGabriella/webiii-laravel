<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //define os metodos que voce quer manipular
    protected $fillable = [
        'nome',
        'descricao'
    ];
}
