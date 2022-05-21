<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    // Ver explicação sobre FILLABLE E GUARDED
    // https://the-webdev-guy.medium.com/laravel-models-fillable-or-guarded-202bafef51a4
    //protected $guarded = [
    //    'id',
    //];
    protected $fillable = [
        'empresa_tipo_id',
        'nomeEmpresa',
        'linkGoogleMaps',
        'latitude',
        'longitude',
    ];

//public function temporadas() {
    //    // Uma Série Tem muitas "Temporadas"
    //    return $this->hasMany(Temporada::class);
    //}
}
