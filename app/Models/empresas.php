<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresas extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $primaryKey = 'idEmpresa';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'endereco',
        'logotipo',
        'website',
        'idSituacao',
        'created_at',
        'updated_at'
    ];
}
