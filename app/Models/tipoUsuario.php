<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoUsuario extends Model
{
    use HasFactory;
    protected $table = 'tipo_usuario';
    protected $primaryKey = 'idTipoUsuario';
    public $timestamps = true;

    protected $fillable = [
        'tipo',
        'idSituacao',
        'created_at',
        'updated_at'
    ];
}
