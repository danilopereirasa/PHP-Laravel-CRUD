<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empregados extends Model
{
    use HasFactory;
    protected $table = 'empregados';
    protected $primaryKey = 'idEmpregado';
    public $timestamps = true;

    protected $fillable = [
        'nome',
        'sobrenome',
        'prontuario',
        'idEmpresa',
        'email',
        'email_verified_at',
        'telefone',
        'idSituacao',
        'created_at',
        'updated_at'
    ];
}
