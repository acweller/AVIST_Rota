<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaInformacao extends Model
{
    use HasFactory;

    public function Empresa() {
        // Uma"Informacao" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
