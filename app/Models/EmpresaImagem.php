<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaImagem extends Model
{
    use HasFactory;

    protected $fillable = [''];

    public function empresa() {
        // Uma "Imagem" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
