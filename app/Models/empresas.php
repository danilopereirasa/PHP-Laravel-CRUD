<?php

namespace App\Models;

use App\Config\Constants;
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

    public function empregados()
    {
        return $this->hasMany(empregados::class,'idEmpresa','idEmpresa');
    }

    public function usuario()
    {
        return $this->hasOne(User::class, 'idRelacao','idEmpresa');



        /*return $this->hasOne(Price::class)->ofMany([
            'published_at' => 'max',
            'id' => 'max',
        ], function ($query) {
            $query->where('published_at', '<', now());
        });*/
    }
}
