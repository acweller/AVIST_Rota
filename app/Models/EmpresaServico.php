<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaServico extends Model
{
    use HasFactory;

    public function Empresa() {
        // Um "Serviço" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
