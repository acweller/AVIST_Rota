<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaPessoa extends Model
{
    use HasFactory;

    public function Empresa() {
        // Uma "Pessoa" pertence a uma "Empresa"
        return $this->belongsTo(Empresa::class);
    }
}
