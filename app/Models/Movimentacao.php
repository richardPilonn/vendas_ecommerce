<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'quantidade',
        'data_movimentacao'
    ];

    public function Produto()
    {
        return $this->hasOne(Produto::class);
    }
}
