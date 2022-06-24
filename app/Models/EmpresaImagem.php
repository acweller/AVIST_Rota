<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaImagem extends Model
{
    use HasFactory;

    public function Empresa() {
        // Uma "Imagem" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
