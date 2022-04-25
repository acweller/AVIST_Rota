<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    use HasFactory;

    protected $fillable = ['numero'];

    public function episodios() {
        // Uma Temporada Tem Muitos "Episódios"
        return $this->hasMany(Episodio::class);
    }

    public function serie() {
        // Uma Temporada pertence a uma "Série"
        return $this->belongsTo(Serie::class);
    }
}
