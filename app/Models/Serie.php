<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    // Indica os campos a serem preenchidos através de uma requisição em massa (no controller)
    protected $fillable = ['nome'];

    public function temporadas() {
        // Uma Série Tem muitas "Temporadas"
        return $this->hasMany(Temporada::class);
    }
}
