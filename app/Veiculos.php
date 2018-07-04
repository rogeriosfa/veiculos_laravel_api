<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $fillable = ['veiculo', 'marca', 'ano', 'descricao', 'vendido'];
}
