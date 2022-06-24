<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaEndereco extends Model
{
    use HasFactory;

    public function Empresa() {
        // Um "Endereço" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
