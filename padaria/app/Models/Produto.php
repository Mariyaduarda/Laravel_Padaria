<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes, HasFactory;
    //
    protected $table = 'produtos';
    protected $fillable = [
        'nome', 
        'descricao',
        'preco',
        'ativo',
    ];
    protected $casts = [
        'preco' => 'decimal:2',
        'ativo' => 'boolean',
    ];

    protected $hidden = []
}
