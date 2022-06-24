<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaContato extends Model
{
    use HasFactory;

    public function Empresa() {
        // Um "Contato" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
