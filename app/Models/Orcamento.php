<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = [
        'nome', 'email', 'telefone', 'empresa', 'assunto', 'mensagem', 'dados_extras'
    ];
}
