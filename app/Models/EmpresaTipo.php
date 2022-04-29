<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaTipo extends Model
{
    use HasFactory;

    protected $fillable = ['nomeEmpresaTipo'];

    //public function temporadas() {
    //    // Uma Série Tem muitas "Temporadas"
    //    return $this->hasMany(Temporada::class);
    //}
}
